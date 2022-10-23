<?php

namespace App\Http\Controllers;
use App\Models\notice;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\redeem_code;
use App\Models\subscription_plan;
use App\Models\subscription;
use App\Models\appointment;
use App\Models\treatment_info;
use Session;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login(){

        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required|email|unique:doctors',
            'password'=> 'required'
        ]);
        $doctor = new doctor();
        $doctor->fname = $request->fname;
        $doctor->lname = $request->lname;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $res = $doctor->save();
        $id = doctor::where('email','=',$request->email)->first()->id;

        subscription::create([
            'd_id'=>$id
        ]);

        // dd($id);
        if($res){
            // return back() ->with('success','Successfully Registered');
            return redirect()->route('login_profile_edit',[$id]);


        }else{
            return back() ->with('fail','Please Check Your Information Properly');
        }
        // return view('index');
    }

    public function login_user(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $doctor =  doctor::where('email','=',$request->email)->first();
        if($doctor){
            if($request->password==$doctor->password){
                if($doctor->verification == 1){
                    if($doctor->status == 0){
                        if($doctor->BMDC == null){
                            $request->session()->put('loginId',$doctor->id);
                            return redirect()->route('login_profile_edit',[$doctor->id]);
                        }else{
                            if($doctor->role == 1){
                                $request->session()->put('loginId',$doctor->id);
                                return redirect()->route('admin');
                            }else{
                            $request->session()->put('loginId',$doctor->id);
                            return redirect()->route('doctor');
                            }
                        }
                    }else{
                        return back() ->with('fail','Your Account is Blocked!');
                    }
                }else{
                    return back() ->with('fail','Your account is not verified yet.Please contact with Reflex');
                }
            }else{
                return back() ->with('fail','Password not Matches');
            }
        }else{
            return back() ->with('fail','Enter Email Properly');
        }
    }

    public function login_profile_edit($id){

        $doctor_info=doctor::where('id','=',$id)->first();
        $doctor_id=$id;

        return view('login_profile_edit',compact('doctor_id','doctor_info'));
    }

    public function login_update_doctor(Request $request,$doctor_id)
    {
        $P_filename='';
        $bmdc_filename='';
        $post_filename='';
        if($request->hasFile('p_image'))
        {

            $file= $request->file('p_image');
            if ($file->isValid()) {
                $P_filename="P".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('doctor',$P_filename);
            }
        }
        if($request->hasFile('image1'))
        {

            $file= $request->file('image1');
            if ($file->isValid()) {
                $bmdc_filename=date('mdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('doctor',$bmdc_filename);
            }
        }
        if($request->hasFile('image2'))
        {

            $file= $request->file('image2');
            if ($file->isValid()) {
                $post_filename=date('Ymdhm').'.'.$file->getClientOriginalExtension();
                $file->storeAs('doctor',$post_filename);
            }
        }

        $request->validate([
            'phone'=> 'required',
            'BMDC'=> 'required|unique:doctors',
            'nid'=> 'required',
            'dob'=> 'required',
            'gender'=> 'required',
            'blood_group'=> 'required',
            // 'bDegree'=> 'required',
            'mCollege'=> 'required',
            'batch'=> 'required',
            'd_session'=> 'required',
            'passing_year'=> 'required',
            // 'professional_degree'=> 'required',
            'speciality'=> 'required'
        ]);
        doctor::find($doctor_id)->update([
            'phone'=>$request->phone,
            'BMDC'=>$request->BMDC,
            'nid'=>$request->nid,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'blood_group'=>$request->blood_group,
            'bDegree'=>$request->bDegree,
            'mCollege'=>$request->mCollege,
            'batch'=>$request->batch,
            'session'=>$request->d_session,
            'passing_year'=>$request->passing_year,
            'professional_degree'=>$request->professional_degree,
            'speciality'=>$request->speciality,
            'designation'=>$request->designation,
            'p_image'=>$P_filename,
            'bmdc_image'=>$bmdc_filename,
            'postG_image'=>$post_filename
        ]);
        // $subscription = new subscription();
        // $subscription->d_id = $doctor_id;
        // $res = $subscription->save();


        return redirect()->route('login')->with('success','Successfully Registered,Please LogIn.');
        // return "hello";
    }

    public function doctor(){

        if(Session::has('loginId')){
            $doctor_info=doctor::where('id','=',Session::get('loginId'))->first();
            $d_id = $doctor_info->id;
            $date_check = Carbon::today()->format('Y-m-d H:i:s');
            // dd($d_id);
            $subscription = subscription::where('d_id','=',$d_id)->first();
            $today = Carbon::today();
            $formatted_today = Carbon::createFromFormat('Y-m-d H:i:s',$today);
            $sub_end = $subscription->end;
            $formatted_subEnd = Carbon::createFromFormat('Y-m-d H:i:s',$sub_end);
            $sub_remain = $formatted_today->diffInDays($formatted_subEnd);
//            dd($sub_remain);
            // dd($subscription->status);
            $appointments = appointment::leftJoin('patient_infos','appointments.p_id','=','patient_infos.id')->where('appointments.d_id','=',$d_id)->where('appointments.date','=',$date_check)->get(['appointments.*','patient_infos.name','patient_infos.image']);
            $count_ap = ($appointments)->count();
//             dd($appointments,$count_ap);
            $total_cost =  treatment_info::where('d_id','=',$d_id)->sum('cost');
            $total_paid =  treatment_info::where('d_id','=',$d_id)->sum('paid');
            $total_due =  treatment_info::where('d_id','=',$d_id)->sum('due');
            $notices = notice::where('status','=','1')->get();
            return view('doctor',compact('doctor_info','subscription','appointments','count_ap','total_cost','total_paid','total_due','notices','sub_remain'));
        }
    }

    public function profile_edit($id){

        $doctor_info=doctor::where('id','=',$id)->first();
        // $doctor_info=doctor::find($id);

        return view('profile_edit',compact('doctor_info'));
    }

    public function update_doctor(Request $request,$id)
    {
        $doctor = doctor::find($id);
        $P_filename=$doctor->p_image;
        if($request->hasFile('p_image'))
        {
            $destination = 'uploads/doctor/'.$doctor->p_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('p_image');
            if ($file->isValid()) {
                $P_filename="P".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($P_filename);
                $file->storeAs('doctor',$P_filename);
            }
        }
        $doctor->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'phone'=>$request->phone,
            'nid'=>$request->nid,
            'mCollege'=>$request->mCollege,
            'batch'=>$request->batch,
            'session'=>$request->d_session,
            'passing_year'=>$request->passing_year,
            'speciality'=>$request->speciality,
            'p_image'=>$P_filename,
        ]);

        return redirect()->route('doctor',$id);
    }

    public function subscription($d_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $subscription_plans = subscription_plan::orderBy('id','desc')->get();
        $subscription_plans2 = subscription_plan::find([3,4]);
        // $subscription_check = subscription::find($d_id);
        $subscription_check = subscription::where('d_id','=',$d_id)->first();
        // dd($subscription_check);
        // dd($subscription_plans2);
        $subscription = subscription::where('d_id','=',$d_id)->first();
        $today = Carbon::today();
        $formatted_today = Carbon::createFromFormat('Y-m-d H:i:s',$today);
        $sub_end = $subscription->end;
        $formatted_subEnd = Carbon::createFromFormat('Y-m-d H:i:s',$sub_end);
        $sub_remain = $formatted_today->diffInDays($formatted_subEnd);
        $total_cost =  treatment_info::where('d_id','=',$d_id)->sum('cost');
        $total_paid =  treatment_info::where('d_id','=',$d_id)->sum('paid');
        $total_due =  treatment_info::where('d_id','=',$d_id)->sum('due');
        $notices = notice::where('status','=','1')->get();
        return view('subscription',compact('doctor_info','subscription_plans','subscription_check','subscription_plans2','total_cost','total_paid','total_due','notices','sub_remain'));
    }

    public function subscription_info($id){
        $subscription_info = subscription_plan::find($id);
        return response()->json([
            'status'=>200,
            'subscription_info' => $subscription_info,
        ]);
    }

    public function subscription_add(Request $request){
            // dd($request->all());
            $d_id = $request->doctor_id;
            $id = subscription::where('d_id','=',$d_id)->first()->id;
            // dd($id);
            subscription::find($id)->update([
                'package_name' => $request->package_name,
                'package_price' => $request->package_price,
                'duration' => $request->package_duration,
                'duration_types' => $request->package_duration_types,
                's_mobile' => $request->s_mobile,
                'request' => $request->s_time,
            ]);
            return back()->with('success','Subscription Successfully Registered, Please Wait for Admin Approval.');
            // return "hello null";

        // else if($request->redeem_code == "reflexDN2022"){
        //    // return "$request->redeem_code";
        //    $duration = "7 Days(Trial)";
        //    $status = "1";
        //    $d_id = $request->doctor_id;
        //    $id = subscription::where('d_id','=',$d_id)->first()->id;
        //    $start = Carbon::now()->format('d/m/Y');
        //    $end = now()->copy()->addDays(7)->format('d/m/Y');
        // //    dd($id,$start,$end,$duration);
        // subscription::find($id)->update([
        //         'package_name' => $request->package_name,
        //         'package_price' => $request->package_price,
        //         'duration' => $duration,
        //         'start' => $start,
        //         'end' => $end,
        //         'status' => $status,
        //     ]);
        //     return back()->with('success','Subscription Added Successfully');
        // }
        // else if($request->redeem_code != "reflexDN2022"){
        //     return back()->with('fail','Please Enter Redeem Code Properly');
        // }


        // $subscription = new subscription();
        // $subscription->d_id = $request->doctor_id;
        // $subscription->package_name = $request->package_name;
        // $subscription->package_price = $request->package_price;
        // $subscription->duration = $request->package_duration;
        // $res = $subscription->save();
        // return back()->with('success','Successfully Registered');
    }

    public function subscription_add_redeem(Request $request){

        $r_redeem = $request->redeem_code;
        $check_redeem = redeem_code::where('redeem_code','=',$r_redeem)->first();
//        dd($check_redeem);
        if($check_redeem == null){
            return back()->with('fail','Please Enter Redeem Code Properly');
        }elseif ($check_redeem->status == '1'){
            return back()->with('fail','This Redeem Code Already Used ! Please Contact With Admin !');
        }else{
        // return "$request->redeem_code";
       $duration = $check_redeem->duration;
       $duration_type = $check_redeem->duration_type;
    //    dd($duration,$duration_type);
       $status = "1";
       $d_id = $request->doctor_id;
       $id = subscription::where('d_id','=',$d_id)->first()->id;
       $start = Carbon::now()->format('Y-m-d H:i:s');
            if($duration_type == "Days"){
                $end = now()->copy()->addDays($duration)->format('Y-m-d H:i:s');
            }else if($duration_type == "Months"){
                $end = now()->copy()->addMonths($duration)->format('Y-m-d H:i:s');
            }else if($duration_type == "Years"){
                $end = now()->copy()->addYears($duration)->format('Y-m-d H:i:s');
            }
    //    dd($id,$duration,$duration_type,$start,$end);
        subscription::find($id)->update([
            'package_name' => $request->package_name,
            'package_price' => $request->package_price,
            'duration' => $duration,
            'duration_types' => $duration_type,
            'start' => $start,
            'end' => $end,
            'status' => $status,
        ]);
        $check_redeem->status = $status;
        $check_redeem->update();
        return back()->with('success','Subscription Added Successfully');
            // return "hello";
        }

    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
