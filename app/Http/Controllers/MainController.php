<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\notice;
use App\Models\subscription;
use App\Models\tooth;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\appointment;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\investigation;
use App\Models\treatment_plan;
use App\Models\treatment_info;
use App\Models\treatment_cost;
use App\Models\drugs;
use App\Models\prescription;
use App\Models\medicine;
use App\Models\report;
use App\Models\treatment_step;
use App\Models\chember_info;
use App\Models\favourite;
use PDF;
// use Mail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Session;

class MainController extends Controller
{
    public function patient_info(Request $request,$d_id)
    {

        $filename='';
        if($request->hasFile('image'))
        {

            $file= $request->file('image');
            if ($file->isValid()) {
                $filename="patient".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('patient',$filename);
            }
        }

    patient_infos::create([

        'd_id'=>$d_id,
        'name'=>$request->name,
        'age'=>$request->age,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
        'Blood_group'=>$request->Blood_group,
        'date'=>$request->date,
        'occupation'=>$request->occupation,
        'address'=>$request->address,
        'email'=>$request->email,
        'image'=>$filename,

    ]);

    $p_id = patient_infos::where('mobile','=',$request->mobile)->where('d_id','=',$d_id)->first()->id;
    // dd($p_id);

    // return redirect()->back();
    // return redirect()->route('doctor',$d_id);
    return redirect()->route('view_patient',[$d_id,$p_id]);

    }

    public function patient_appoinment($id){
        $patient_info=patient_infos::find($id);
        return response()->json([
            'status'=>200,
            'p_info' => $patient_info,
        ]);
    }

    public function appointment(Request $request){
        $d_id = $request->d_id;
        $p_id = $request->p_id;
//        $date = date('d/m/Y',strtotime($request->date));
        $date = date('Y-m-d H:i:s',strtotime($request->date));
        $time = date('h:i a',strtotime($request->time));
        $appointment_check = appointment::where('d_id','=',$d_id)->where('p_id','=',$p_id)->first();
    //    dd($request->all(),$appointment_check);
        if($appointment_check->null){
            appointment::create([
                'd_id'=>$request->d_id,
                'p_id'=>$request->p_id,
                'date'=>$date,
                'time'=>$time
            ]);
        }else{
            $appointment_check->date = $date;
            $appointment_check->time = $time;
            $appointment_check->status = "0";
            $appointment_check->update();
        }
        return redirect()->back();
    }

    public function edit_appointment($id){
        $appointment_info = appointment::leftJoin('patient_infos','appointments.p_id','=','patient_infos.id')->where('appointments.id','=',$id)->first(['appointments.*','patient_infos.patient_id','patient_infos.name','patient_infos.mobile']);
        $date = Carbon::parse($appointment_info->date)->format('Y-m-d');
        $time = Carbon::parse($appointment_info->time)->format('H:i');
//        dd($date);
        return response()->json([
            'status'=>200,
            'app' => $appointment_info,
            'f_date'=>$date,
            'f_time' =>$time,
        ]);
    }

    public function update_appointment(Request $request){
        $id = $request->appointment_id;
        // dd($id);
        $date = date('Y-m-d H:i:s',strtotime($request->date));
        $time = date('h:i a',strtotime($request->time));

        $appointment_info = appointment::find($id);
        $appointment_info->date = $date;
        $appointment_info->time = $time;
        $appointment_info->update();
        return back();
    }

    public function delete_appointment(Request $request){
        $del_appointment_id = $request->deletingId;
        // dd($del_doctor_id);
        $del_appointment_info = appointment::find($del_appointment_id);
        $del_appointment_info->delete();
        return back();
    }

    public function next_appointment(Request $request){
//        dd($request->all());
//        $date = date('d/m/Y',strtotime($request->date));
        $d_id = $request->d_id;
        $p_id = $request->p_id;
        $date = date('Y-m-d H:i:s',strtotime($request->date));
        $time = date('h:i a',strtotime($request->time));
        // $d = date('d/m/Y');
        // dd($new_date, $new_time);
        appointment::find($request->appointment_id)->update([
            'date'=>$date,
            'time'=>$time
        ]);
        return redirect()->route('view_patient',[$d_id,$p_id]);
    }


    public function patient_list($id){
        $doctor_info=doctor::where('id','=',$id)->first();
        $patient_list = patient_infos::where('d_id','=',$doctor_info->id)->get();
        $subscription = subscription::where('d_id','=',$id)->first();
        $today = Carbon::today();
        $formatted_today = Carbon::createFromFormat('Y-m-d H:i:s',$today);
        $sub_end = $subscription->end;
        $formatted_subEnd = Carbon::createFromFormat('Y-m-d H:i:s',$sub_end);
        $sub_remain = $formatted_today->diffInDays($formatted_subEnd);
        $total_cost =  treatment_info::where('d_id','=',$id)->sum('cost');
        $total_paid =  treatment_info::where('d_id','=',$id)->sum('paid');
        $total_due =  treatment_info::where('d_id','=',$id)->sum('due');
        $notices = notice::where('status','=','1')->get();
        // $patient = patient_infos::all();
        return view('patient_list',compact('doctor_info','patient_list','total_cost','total_paid','total_due','notices','sub_remain'));
    }

    // edit Patient form Patient List
    public function edit_patient_list($id){
        $patient = patient_infos::find($id);
        return response()->json([
            'status'=>200,
            'patient_infos' => $patient,
        ]);
    }
    public function update_patient_list(Request $request){

        $p_id = $request->patient_id;

        $patient_info = patient_infos::find($p_id);
        // dd($request->all());

        $filename=$patient_info->image;
        if($request->hasFile('image'))
        {
            $destination = 'uploads/patient/'.$patient_info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('image');
            if ($file->isValid()) {
                $filename="patient".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('patient',$filename);
            }
        }


        $patient_info->update([

            'name' => $request->name,
            'age' => $request->age,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'Blood_group' => $request->Blood_group,
            'date' => $request->date,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'email' => $request->email,
            'image' => $filename
        ]);
        return back();
    }

    public function delete_patient_list(Request $request){
        $del_doctor_id = $request->deletingId;
        $patient=patient_infos::where('id','=',$del_doctor_id)->first();
        // dd($patient);
        $destination = 'uploads/patient/'.$patient->image;
        // dd($destination);
        if(File::exists($destination)){
            File::delete($destination);
        }
        $patient->delete();
        return back();


    }

    public function edit_patient(Request $request,$d_id,$p_id){

        $patient_info = patient_infos::find($p_id);

        $filename=$patient_info->image;
        if($request->hasFile('image'))
        {
            $destination = 'uploads/patient/'.$patient_info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('image');
            if ($file->isValid()) {
                $filename="patient".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('patient',$filename);
            }
        }


        $patient_info->update([

            'name' => $request->name,
            'age' => $request->age,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'Blood_group' => $request->Blood_group,
            'date' => $request->date,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'email' => $request->email,
            'image' => $filename
        ]);

        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::where('id','=',$p_id)->get();
        $total_cost =  treatment_info::where('d_id','=',$d_id)->sum('cost');
        $total_paid =  treatment_info::where('d_id','=',$d_id)->sum('paid');
        $total_due =  treatment_info::where('d_id','=',$d_id)->sum('due');
        return view('Find_patient',compact('doctor_info','patient','total_cost','total_paid','total_due'));
    }

    public function delete_patient(Request $request,$d_id,$p_id){
        $patient=patient_infos::where('id','=',$p_id)->first();
        // dd($patient);
        $destination = 'uploads/patient/'.$patient->image;
        // dd($destination);
        if(File::exists($destination)){
            File::delete($destination);
        }
        $patient->delete();
        // $doctor_info=doctor::where('id','=',$d_id)->first();
        // $patient=patient_infos::where('id','=',$p_id)->get();
        // return view('Find_patient',compact('doctor_info','patient'));
        return redirect()->route('doctor');
        // return redirect()->back();
        // return "hello";
    }


    public function search(Request  $request,$id)
    {
        $doctor_info=doctor::where('id','=',$id)->first();

        $request->validate([
            'search'=> 'required'
        ]);
        $mobile = $request->search;
        $patient=patient_infos::where('mobile','=',$mobile)->where('d_id','=',$id)->get();
        // $patient=patient_infos::where('mobile','like','%'.$request->search.'%')->get();
        // dd($patient->all());

        // return redirect()->back();
        $date_check = Carbon::today()->format('Y-m-d H:i:s');
        $appointments = appointment::leftJoin('patient_infos','appointments.p_id','=','patient_infos.id')->where('appointments.d_id','=',$id)->where('appointments.date','=',$date_check)->get(['appointments.*','patient_infos.name','patient_infos.image']);
        $count_ap = ($appointments)->count();

        $subscription = subscription::where('d_id','=',$id)->first();
        $today = Carbon::today();
        $formatted_today = Carbon::createFromFormat('Y-m-d H:i:s',$today);
        $sub_end = $subscription->end;
        $formatted_subEnd = Carbon::createFromFormat('Y-m-d H:i:s',$sub_end);
        $sub_remain = $formatted_today->diffInDays($formatted_subEnd);
        $total_cost =  treatment_info::where('d_id','=',$id)->sum('cost');
        $total_paid =  treatment_info::where('d_id','=',$id)->sum('paid');
        $total_due =  treatment_info::where('d_id','=',$id)->sum('due');
        $notices = notice::where('status','=','1')->get();

        return view('Find_patient',compact('doctor_info','patient','appointments','count_ap','total_cost','total_paid','total_due','notices','sub_remain'));
    }

    public function update_patient(Request $request,$id)
    {
        patient_infos::find($id)->update([
            'bp_high'=>$request->bp_high,
            'bp_low'=>$request->bp_low,
            'Bleeding_disorder'=>$request->Bleeding_disorder,
            'Heart_Disease'=>$request->Heart_Disease,
            'Allergy'=>$request->Allergy,
            'Diabetic'=>$request->Diabetic,
            'Pregnant'=>$request->Pregnant,
            'Helpatics'=>$request->Helpatics,
            'other'=>$request->other
        ]);

        // return redirect()->route('view_patient',$d_id,$p_id);
        return redirect()->back();
    }

    public function view_patient($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $c_cs = chife_complaint::all();
        $lc_cs = chife_complaint::orderBy('id','desc')->get();
        $c_fs = clinical_finding::all();
        $lc_fs = clinical_finding::orderBy('id','desc')->get();
        $investigations = investigation::all();
        $investigation_lists = investigation::orderBy('id','desc')->get();
        $t_ps = treatment_plan::all();
        $lt_ps = treatment_plan::orderBy('id','desc')->get();
        $t_p_costs = treatment_cost::all();
        $treatment_infos = treatment_info::where('p_id','like',$p_id)->where('d_id','=',$d_id)->get();
        $total_cost =  treatment_info::where('p_id','like',$p_id)->where('d_id','=',$d_id)->sum('cost');
        $v_prescriptions = prescription::where('p_id','like',$p_id)->get();
        $fav = favourite::where('d_id','=',$d_id)->first();
        if($fav == null){
            return redirect()->route('doctor_profile_setting',[$d_id])->with('fail','Please Add Favourite Frist..!');
        }else{
            return view('view_patient',compact('doctor_info','patient','c_cs','lc_cs','c_fs','lc_fs','t_ps','lt_ps','t_p_costs','treatment_infos','total_cost','investigations','investigation_lists','v_prescriptions','fav'));
        }
    }

    public function treatment_info(Request $request,$d_id,$p_id){
        // dd($request->all());
        $pc_c = $request->pc_c;
        $pc_c = implode(',',$pc_c);
        $pc_f = $request->pc_f;
        $pc_f = implode(',',$pc_f);
        // dd($pc_f);
        $investigation = $request->p_investigation;
        $investigation = implode(',',$investigation);
        // dd($investigation); change pt_p after free time
        if($request->pt_p != null){
            $pt_p = $request->pt_p;
        }else{
            $pt_p = $request->pt_p_check;
        }
        // $pt_p = implode(',',$pt_p);
        // dd($pt_p);
        // dd($request->all(),$pt_p);

        $pt_p_cost = treatment_cost::where('name','=',$pt_p)->where('d_id','=',$d_id)->first();
        if($pt_p_cost == null){

            return redirect()->route('doctor_profile_setting',[$d_id])->with('fail','Please Add Treatment Cost Frist..!');
            // return "hello";
        }else{
        $cost = $pt_p_cost->price;
        $paid='0';
        $due='0';
        }
        // dd($pt_p_cost,$cost);

        $treatment_info = new treatment_info();
        $treatment_info->d_id = $d_id;
        $treatment_info->p_id = $p_id;
        $treatment_info->tooth_type = $request->tooth_type;
        $treatment_info->tooth_no = $request->tooth_no;
        $treatment_info->tooth_side = $request->tooth_side;
        $treatment_info->chife_complaints = $pc_c;
        $treatment_info->clinical_findings = $pc_f;
        $treatment_info->investigation = $investigation;
        $treatment_info->treatment_plans = $pt_p;
        $treatment_info->cost = $cost;
        $treatment_info->paid = $paid;
        $treatment_info->due = $due;
        $res = $treatment_info->save();

        return redirect()->back();
        
    }
    public function treatments($d_id,$p_id,$t_id,$t_plans){
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $treatment_info = treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->where('id','=',$t_id)->first();
        // dd($treatment_info->id);
        $v_prescriptions = prescription::where('p_id','like',$p_id)->get();
        $reports = report::where('d_id','=',$d_id)->where('p_id','=',$p_id)->where('treatment_id','=',$t_id)->get();
        $reports_count = report::where('d_id','=',$d_id)->where('p_id','=',$p_id)->where('treatment_id','=',$t_id)->count();
        // dd($reports->all());
        $total_report = 10;
        $total_report = $total_report - $reports_count;
        $t_steps = treatment_step::where('d_id','=',$d_id)->where('p_id','=',$p_id)->where('treatment_id','=',$t_id)->get();
        $tooth_info = tooth::where('tooth No','=',$treatment_info->tooth_no)->first();
        $appointment_id = appointment::where('d_id','=',$d_id)->where('p_id','=',$p_id)->first()->id;
//        dd($appointment_id);
//        dd($tooth_info);
        // dd($t_steps->all());

        // dd($v_prescriptions);
        // foreach($v_prescriptions as $v_prescription){
        //     // dd($v_prescription);
        //     $drug_list = $v_prescription->drug_id_list;
        //     // dd($drug_list);
        //     $drug_list = explode(',',$drug_list);
        //     // dd($drug_list);
        // }
        // $drugs_infos = drugs::find($drug_list);


        // dd($drugs_info);
        return view('treatmentplans',compact('doctor_info','patient','treatment_info','v_prescriptions','reports','total_report','t_steps','tooth_info','appointment_id'));

            // if($t_plans == 'Restoration'){
            //     return view('treatmentplans',compact('doctor_info','patient','treatment_info'));
            // }else{
            //     return "Hello";
            // }
        // return view('treatmentplans');

    }
    public function prescription($d_id,$p_id){

        $ldate = date('d-m-Y');
        // dd($ldate);

        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $chembers = chember_info::where('d_id','=',$d_id)->get();

        $treatment_infos = treatment_info::where('p_id','=',$p_id)->get();
        // $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        foreach($treatment_infos as $treatment_info){
        $pc_c[]=$treatment_info->chife_complaints;
        // $pc_f[]=$treatment_info->clinical_findings;
        // $pt_p[]=$treatment_info->treatment_plans;
        // $investigations[]= $treatment_info->investigation;
        // $t_plans[]=$treatment_info->treatment_plans;
        }
        // $pc = implode(',',$pc_c);
        // dd($pc_c);
        // $pc_c = explode(',',$pc_c);
        // $pc_f = explode(',',$pc_f);
        // $pt_p = explode(',',$pt_p);
        // $investigations = explode(',',$investigations);
        // $t_id=$treatment_info->id;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();

        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();
        return view('prescription', compact('doctor_info','patient','chembers','pc_c','medicines','medicines_lists','drugs','treatment_infos'));
        // ,'t_id',,'tooth_no','pc_f','pt_p','investigations','t_plans'
    }
    public function view_prescription($d_id,$p_id){

        $ldate = date('d-m-Y');
        // dd($ldate);

        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);

        $treatment_info = treatment_info::where('p_id','=',$p_id)->first();
        // $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $investigations = $treatment_info->investigation;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        $pt_p = explode(',',$pt_p);
        $investigations = explode(',',$investigations);
        $t_id=$treatment_info->id;
        $t_plans=$treatment_info->treatment_plans;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();

        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();
        return view('view_prescription', compact('doctor_info','patient','pc_c','pc_f','pt_p','investigations','drugs','t_id','t_plans','medicines','medicines_lists')); //,'tooth_no'
    }


    public function add_drug(Request $request,$d_id,$p_id){
        // dd($request->date);
        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();
        $t_id = $treatment_info->id;
        // dd($t_id);

        $drugs = new drugs();
        $drugs->d_id = $d_id;
        $drugs->p_id = $p_id;
        // $drugs->t_id = $t_id;
        $drugs->drug_name = $request->drug_name;
        $drugs->drug_time = $request->drug_time;
        $drugs->meal_time = $request->meal_time;
        $drugs->duration = $request->duration;
        $drugs->date = $request->date;
        $res = $drugs->save();
        return redirect()->route('prescription',[$d_id,$p_id]);
        // return "hello";
    }

    public function edit_drug($id){
        $drugInfo = drugs::find($id);
        return response()->json([
            'status'=>200,
            'di' => $drugInfo,
        ]);
    }

    public function update_drug(Request $request){
        $drug_id = $request->drug_id;
        // dd($drug_id);
        $drug_info = drugs::find($drug_id);
        $drug_info->drug_name = $request->drug_name;
        $drug_info->drug_time = $request->drug_time;
        $drug_info->meal_time = $request->meal_time;
        $drug_info->duration = $request->duration;
        $res = $drug_info->update();
        return back();
    }

    public function delete_drug(Request $request){
        $del_drug_id = $request->deletingId;
        // dd($del_drug_id);
        $del_drug_info = drugs::find($del_drug_id);
        $del_drug_info->delete();
        return back();
    }

    public function get_drug_info($p_id){
        $ldate = date('d-m-Y');
        $drug_ids = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get('id');
            // $drugs = drugs::find($drug_ids);
        foreach($drug_ids as $drug_id){
            $drug_id_list[]=$drug_id->id;
        }
        $drug_id_list = implode(',',$drug_id_list);
        return response()->json([
            'status'=>200,
            'drugIds' => $drug_id_list,
        ]);
    }

    public function prescription_add(Request $request,$d_id){
        // return "hello";
        $p_id = $request->patientID;
        $date = $request->date;
        $check = prescription::where('p_id','=',$p_id)->where('date','=',$date)->first();
        if($check){
            return back()->with('success','Sorry! You already Add this Information.');;
        }else{
        $prescription = new prescription();
        $prescription->d_id = $d_id;
        $prescription->p_id = $p_id;
        // $prescription->t_id = $t_id;
        // $prescription->t_plan = $t_plans;
        $prescription->drug_id_list = $request->drugIdList;
        $prescription->date = $date;
        $res = $prescription->save();
        return back();
        }
    }

    public function prescription_delete(Request $request){
        $del_prescription_id = $request->deletingId;
        // dd($del_drug_id);
        $del_prescription_info = prescription::find($del_prescription_id);
        $del_prescription_info->delete();
        return back();
    }

    public function invoice($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        //test for new patient id custom create
        $l=patient_infos::latest('id')->first();
        $last = $l->id;
        $last++;
        // dd($last);
        $ldate = date('dmY');
        $view = $ldate.'/'.$last;
        // dd($view);
        //test end
        $treatment_infos = treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->get();
        $total_cost =  treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->sum('cost');
        $total_paid =  treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->sum('paid');
        $total_due =  treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->sum('due');

        $discount =  discount::where('p_id','=',$p_id)->where('d_id','=',$d_id)->where('p_mobile','=',$patient->mobile)->first();
//    dd($discount);
        if($discount != null){
            if($discount->discount_type == "precent"){
                $total_discount = $total_cost*$discount->discount/100;
                $total_Amount = $total_cost - $total_discount;
            }else{
                $total_discount = $discount->discount;
                $total_Amount = $total_cost - $total_discount;
            }
        }else{
            $total_discount=0;
            $total_Amount = $total_cost;
        }
        // dd($total_cost,$total_paid,$total_due);
        $treatment_invoice_infos = treatment_info::where('p_id','like',$p_id)->where('d_id','=',$d_id)->where('payment_status','=',0)->get();

        $chamber_info = chember_info::where('d_id','=',$d_id)->first();

        return view('invoice',compact('doctor_info','patient','treatment_infos','treatment_invoice_infos','view','total_cost','total_paid','total_due','total_discount','total_Amount','chamber_info'));
    }

    public function treatment_payment(Request $request){
//        dd($request->all());
        $t_info_id = $request->t_plan_id;
        // dd($t_info_id);
        $treatment_infos = treatment_info::find($t_info_id);
        $cost = $treatment_infos->cost;
        // dd($cost);
        $previous_paid = $treatment_infos->paid;
        // dd($previous_paid);
        $paid_amount = $request->tp_amount;
        $paid = $previous_paid + $paid_amount;
        // dd($paid);
        $due = $cost - $paid;
        // dd($due);

        treatment_info::find($t_info_id)->update([
            'paid'=>$paid,
            'due'=>$due,
            'payment_method'=>$request->t_payment_type,
        ]);

        if($cost == $paid || $due < 0){
            $payment_status = 1;
            treatment_info::find($t_info_id)->update([
                'payment_status'=>$payment_status,
            ]);
        }


        return back();
    }

    public function treatment_discount(Request $request){
//        dd($request->all());
        $check_p_id = discount::where('p_id','=',$request->p_id)->where('d_id','=',$request->d_id)->where('p_mobile','=',$request->p_mobile)->first();
//    dd($check_p_id);
        if($check_p_id == null){
            discount::create([
                'p_id'=>$request->p_id,
                'd_id'=>$request->d_id,
                'p_mobile'=>$request->p_mobile,
                'discount'=>$request->tp_discount,
                'discount_type'=>$request->t_discount_type,
            ]);
        }else{
            $check_p_id->discount = $request->tp_discount;
            $check_p_id->discount_type = $request->t_discount_type;
            $check_p_id->update();
        }


        return back();
    }

    public function report(Request $request,$d_id,$p_id,$t_id){
        $filename='';
        if($request->hasFile('r_image'))
        {

            $file= $request->file('r_image');
            if ($file->isValid()) {
                $filename="r".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('report',$filename);
            }
        }else{
            return back() ->with('fail','File Empty');
        }
        $report = new report();
        $report->d_id = $d_id;
        $report->p_id = $p_id;
        $report->treatment_id = $t_id;
        $report->image = $filename;
        $report->save();

        return back() ->with('success','Successfully Report Picture Added');


    }

    public function report_delete(Request $request){
        $del_report_id = $request->deletingId;
        // dd($del_drug_id);
        $del_report_info = report::find($del_report_id);

        $destination = 'uploads/report/'.$del_report_info->image;
        // dd($destination);
        if(File::exists($destination)){
            File::delete($destination);
        }

        $del_report_info->delete();
        return back();
    }

    public function treatment_steps(Request $request,$d_id,$p_id,$t_id){
        // dd($request->all());
        // $s = $request->steps;
        // $s = implode(' ',$s);
        // dd($s);
        $ldate = date('d-m-Y');
        $t_step = new treatment_step();
        $t_step->d_id = $d_id;
        $t_step->p_id = $p_id;
        $t_step->treatment_id = $t_id;
        // $t_step->class = $request->btnradio;
        $t_step->steps = $request->steps;
        $t_step->date = $ldate;
        $t_step->save();

        $t_status = treatment_info::find($t_id);
        $t_status->status = $request->t_status;
        $t_status->update();

        return back();
    }

    public function ot_notes($id){
        $tretreatment_step =treatment_step::find($id);
        return response()->json([
            'status'=>200,
            'ts' => $tretreatment_step,
        ]);
    }

    public function update_ot(Request $request){
        $ot_id = $request->ot_notes_id;
        // dd($del_ot_id);
        $ot_info = treatment_step::find($ot_id);

        $ot_info->steps = $request->steps;
        $ot_info->update();
        return back();
    }

    public function delete_ot(Request $request){
        $del_ot_id = $request->deletingId;
        // dd($del_ot_id);
        $del_ot_info = treatment_step::find($del_ot_id);

        $del_ot_info->delete();
        return back();
    }




    public function sendMailWithPdf($d_id,$p_id){
        $ldate = date('d-m-Y');
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $treatment_info = treatment_info::where('p_id','=',$p_id)->first();
        $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $investigations = $treatment_info->investigation;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        $pt_p = explode(',',$pt_p);
        $investigations = explode(',',$investigations);
        $t_id=$treatment_info->id;
        $t_plans=$treatment_info->treatment_plans;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();
        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();

        $data["email"] = "mahadimonna01@gmail.com";
        $data["Title"] = "Email Test";
        $data["body"] = "Email Test body";

        $pdf = PDF::loadview('view_prescription',compact('doctor_info','patient','pc_c','pc_f','pt_p','investigations','drugs','t_id','t_plans','tooth_no','medicines','medicines_lists'),$data)->setOptions(['defaultFont' => 'sans-serif']);

        Mail::send([],$data,function($msg) use ($data,$pdf){
            $msg->to($data["email"])
            ->subject($data["Title"])
            ->attachData($pdf->output(),"test.pdf");
        });
        // dd("email has been sent.");
        return back();
    }


}
