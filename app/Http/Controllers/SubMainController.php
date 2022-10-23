<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\investigation;
use App\Models\medicine;
use App\Models\treatment_plan;
use App\Models\treatment_cost;
use App\Models\treatment_info;
use App\Models\prescription;
use App\Models\chember_info;
use App\Models\chember_schedule;
use App\Models\favourite;
use Illuminate\Http\Request;
use File;


class SubMainController extends Controller
{
    public function doctor_profile_setting($d_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $t_ps = treatment_plan::all();
        $t_p_costs = treatment_cost::where('d_id','=',$d_id)->get();
        $chembers = chember_info::where('d_id','=',$d_id)->get();
        $schedules = chember_schedule::leftJoin('chember_infos','chember_schedules.chem_id','=','chember_infos.id')->where('chember_infos.d_id','=',$d_id)->get(['chember_schedules.*','chember_infos.chember_name']);
        // dd($schedules);
        $c_cs = chife_complaint::all();
        $c_fs = clinical_finding::all();
        $investigations = investigation::all();
        $fav = favourite::where('d_id','=',$d_id)->first();
        // dd($favs);
        return view('doctor_profile_setting',compact('doctor_info','t_ps','t_p_costs','chembers','schedules','c_cs','c_fs','investigations','fav'));
    }

    public function doctor_chember(Request $request){
        // dd($request->all());
        $chember_info = new chember_info();
        $chember_info->d_id = $request->d_id;
        $chember_info->chember_name = $request->chember_name;
        $chember_info->chember_address = $request->chember_address;
        $chember_info->chember_number = $request->chember_number;
        $chember_info->save();

        return back();
    }

    public function edit_chember($id){
        $chember_info = chember_info::find($id);
        return response()->json([
            'status'=>200,
            'ci' => $chember_info,
        ]);

    }

    public function update_chember(Request $request){
        // dd($request->all());
        $ci_id = $request->chember_id;
        $chember_info = chember_info::find($ci_id);
        $chember_info->chember_name = $request->chember_name;
        $chember_info->chember_address = $request->chember_address;
        $chember_info->chember_number = $request->chember_number;
        $chember_info->update();

        return back();
    }

    public function delete_chember(Request $request){
        $del_chember_id = $request->deletingId;
        // dd($del_chember_id);
        $del_chember_info = chember_info::find($del_chember_id);
        $del_chember_info->delete();
        return back();
    }

    public function chember_schedule(Request $request){
        
        $count = count($request->weekName);
        // dd($request->all(),$count);

        for ($i=1; $i <= $count; $i++) { 
            $chem_schedule = new chember_schedule();
            $chem_schedule->chem_id = $request->chem_name;
            $chem_schedule->week_name = $request->weekName[$i];
            $chem_schedule->day_time = date('h:i A',strtotime($request->moreDays[$i]));
            $chem_schedule->evening_time = date('h:i A',strtotime($request->moreEvening[$i]));
            $chem_schedule->save();
        }

        return back();
    }

    public function add_favourite(Request $request){
        // dd($request->all());

        $c_cs = $request->c_c;
        $c_c = implode(',',$c_cs);
        $c_fs = $request->c_f;
        $c_f = implode(',',$c_fs);
        // dd($pc_f);
        $investigations = $request->investigation;
        $investigation = implode(',',$investigations);
        // dd($investigation); change pt_p after free time
        $t_ps = $request->t_p;
        $t_p = implode(',',$t_ps);

        $fav = new favourite();
        $fav->d_id = $request->d_id;
        $fav->fav_cc = $c_c;
        $fav->fav_cf = $c_f;
        $fav->fav_investigation = $investigation;
        $fav->fav_tp = $t_p;
        $fav->save();

        return back();
    }

    public function edit_favourite($id){
        $favourite = favourite::find($id);
        $fav_cc = $favourite->fav_cc;
        $fav_cc = explode(',',$fav_cc);
        $fav_cf = $favourite->fav_cf;
        $fav_cf = explode(',',$fav_cf);
        $fav_investigation = $favourite->fav_investigation;
        $fav_investigation = explode(',',$fav_investigation);
        $fav_tp = $favourite->fav_tp;
        $fav_tp = explode(',',$fav_tp);
        
        return response()->json([
            'status'=>200,
            'fav_cc' => $fav_cc,
            'fav_cf' => $fav_cf,
            'fav_investigation' => $fav_investigation,
            'fav_tp' => $fav_tp,
        ]);
    }

    public function update_favourite(Request $request){
        // dd($request->all());
        $c_cs = $request->uc_c;
        $c_c = implode(',',$c_cs);

        $c_fs = $request->uc_f;
        $c_f = implode(',',$c_fs);
        // dd($pc_f);
        $investigations = $request->u_investigation;
        $investigation = implode(',',$investigations);
        // dd($investigation); change pt_p after free time
        $t_ps = $request->ut_p;
        $t_p = implode(',',$t_ps);

        $fav = favourite::find($request->fav_id);
        $fav->fav_cc = $c_c;
        $fav->fav_cf = $c_f;
        $fav->fav_investigation = $investigation;
        $fav->fav_tp = $t_p;
        $fav->update();

        return back();
    }

    public function add_barcode(Request $request){

        $barcode_filename='';
        if($request->hasFile('barcode'))
        {
            $file= $request->file('barcode');
            if ($file->isValid()) {
                $barcode_filename="Bar".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('Barcode',$barcode_filename);
            }
        }
        
        $doctor_info = doctor::find($request->d_id);
        $doctor_info->bar_image = $barcode_filename;
        $doctor_info->update();

        return back();
    }

    public function update_barcode(Request $request){
        // dd($request->all());
        $doctor_info = doctor::find($request->d_id);
        $barcode_filename=$doctor_info->bar_image;
        if($request->hasFile('u_barcode'))
        {
            $destination = 'uploads/Barcode/'.$doctor_info->bar_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('u_barcode');
            if ($file->isValid()) {
                $barcode_filename="Bar".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('Barcode',$barcode_filename);
            }
        }

        $doctor_info->bar_image = $barcode_filename;
        $doctor_info->update();

        return back();
    }



    public function chife_complaint(Request $request){
        $chife_complaint = new chife_complaint();
        $chife_complaint->name = $request->cc_name;
        $chife_complaint->status = $request->cc_status;
        $res = $chife_complaint->save();
        return back();
    }

    public function edit_chife_complaint($id){
        $chifeComplaint = chife_complaint::find($id);
        return response()->json([
            'status'=>200,
            'cc' => $chifeComplaint,
        ]);
    }
    
    public function update_chife_complaint(Request $request){
        $cc_id = $request->c_c_id;
        // dd($cc_id);
        $chife_complaint = chife_complaint::find($cc_id);
        $chife_complaint->name = $request->cc_name;
        $res = $chife_complaint->update();
        return back();
    }

    public function delete_chife_complaint(Request $request){
        $del_cc_id = $request->deletingId;
        // dd($del_drug_id);
        $del_cc_info = chife_complaint::find($del_cc_id);
        $del_cc_info->delete();
        return back();
    }

    
    public function clinical_finding(Request $request){
        $clinical_finding = new clinical_finding();
        $clinical_finding->name = $request->cf_name;
        $clinical_finding->status = $request->cf_status;
        $res = $clinical_finding->save();
        return back();
    }

    public function edit_clinical_finding($id){
        $clinicalFinding = clinical_finding::find($id);
        return response()->json([
            'status'=>200,
            'cf' => $clinicalFinding,
        ]);
    }

    public function update_clinical_finding(Request $request){
        $cf_id = $request->c_f_id;
        // dd($cc_id);
        $clinical_finding = clinical_finding::find($cf_id);
        $clinical_finding->name = $request->cf_name;
        $res = $clinical_finding->update();
        return back();
    }

    public function delete_clinical_finding(Request $request){
        $del_cf_id = $request->deletingId;
        // dd($del_drug_id);
        $del_cf_info = clinical_finding::find($del_cf_id);
        $del_cf_info->delete();
        return back();
    }

    public function investigation(Request $request){
        $investigation = new investigation();
        $investigation->name = $request->investigation_name;
        $investigation->status = $request->investigation_status;
        $res = $investigation->save();
        return back();
    }

    public function edit_investigation($id){
        $investigation = investigation::find($id);
        return response()->json([
            'status'=>200,
            'inves' => $investigation,
        ]);
    }

    public function update_investigation(Request $request){
        $investigation_id = $request->investigation_id;
        // dd($cc_id);
        $investigation = investigation::find($investigation_id);
        $investigation->name = $request->investigation_name;
        $res = $investigation->update();
        return back();
    }

    public function delete_investigation(Request $request){
        $del_investigation_id = $request->deletingId;
        // dd($del_drug_id);
        $del_investigation_info = investigation::find($del_investigation_id);
        $del_investigation_info->delete();
        return back();
    }

    public function treatment_plan(Request $request){
        // dd($request->all());
        $treatment_plan = new treatment_plan();
        $treatment_plan->name = $request->tp_name;
        $treatment_plan->status = $request->tp_status;
        $treatment_plan->save();

        $treatment_cost = new treatment_cost();
        $treatment_cost->d_id = $request->d_id;
        $treatment_cost->name = $request->tp_name;
        $treatment_cost->price = $request->tp_cost;
        $treatment_cost->save();

        return back();
    }

    public function edit_treatment_plan($id){
        $treatmentPlan = treatment_plan::find($id);
        return response()->json([
            'status'=>200,
            'tp' => $treatmentPlan,
        ]);
    }

    public function update_treatment_plan(Request $request){
        $tp_id = $request->t_p_id;
        // dd($cc_id);
        $treatment_plan = treatment_plan::find($tp_id);
        $treatment_plan->name = $request->tp_name;
        $treatment_plan->cost = $request->tp_cost;
        $res = $treatment_plan->update();
        return back();
    }

    public function delete_treatment_plan(Request $request){
        $del_tp_id = $request->deletingId;
        // dd($del_drug_id);
        $del_tp_info = treatment_plan::find($del_tp_id);
        $del_tp_info->delete();
        return back();
    }

    public function treatment_cost(Request $request){
        $treatment_cost = new treatment_cost();
        $treatment_cost->d_id = $request->d_id;
        $treatment_cost->name = $request->tp_name;
        $treatment_cost->price = $request->tp_price;
        $res = $treatment_cost->save();
        return back();
    }

    public function edit_treatment_cost($id){
        $treatmentCost = treatment_cost::find($id);
        return response()->json([
            'status'=>200,
            'tp_cost' => $treatmentCost,
        ]);
    }

    public function update_treatment_cost(Request $request){
        $tp_id = $request->tp_cost_id;
        // dd($cc_id);
        $treatment_cost = treatment_cost::find($tp_id);
        $treatment_cost->name = $request->tp_cost_name;
        $treatment_cost->price = $request->tp_cost;
        $res = $treatment_cost->update();

        return back();
    }

    public function delete_treatment_cost(Request $request){
        $del_tpCost_id = $request->deletingId;
        // dd($del_drug_id);
        $del_tpcost_info = treatment_cost::find($del_tpCost_id);
        $del_tpcost_info->delete();
        return back();
    }

    public function medicine_add(Request $request){
        $medicine = new medicine();
        $medicine->name = $request->medicine_name;
        $medicine->brand = $request->medicine_brand;
        $res = $medicine->save();
        return back();
    }

    public function edit_medicine($id){
        $medicine = medicine::find($id);
        return response()->json([
            'status'=>200,
            'medicine_info' => $medicine,
        ]);
    }

    public function update_medicine(Request $request){
        $medicine_id = $request->medicine_id;
        // dd($cc_id);
        $medicine = medicine::find($medicine_id);
        $medicine->name = $request->medicine_name;
        $medicine->brand = $request->medicine_brand;
        $res = $medicine->update();
        return back();
    }

    public function delete_medicine(Request $request){
        $del_medicine_id = $request->deletingId;
        // dd($del_drug_id);
        $del_medicine_info = medicine::find($del_medicine_id);
        $del_medicine_info->delete();
        return back();
    }

    
}
