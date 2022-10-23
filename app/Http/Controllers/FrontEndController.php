<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\patient_infos;
use App\Models\subscription;
use App\Models\treatment_info;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\subscription_plan;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\chember_info;

class FrontEndController extends Controller
{
    public function header()
    {
        return view('header');
    }
    public function adminheader()
    {
        return view('adminheader');
    }
    public function footer()
    {
        return view('footer');
    }

    public function admin_page()
    {
        return view('admin_page');
    }
    public function prescription()
    {
        return view('prescription');
    }

    public function subscription()
    {
        $subscription_plans = subscription_plan::all();
        return view('subscription',compact('subscription_plans'));
    }

    public function appointment($d_id,$date=null)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $appointment = appointment::leftJoin('patient_infos','appointments.p_id','=','patient_infos.id')->where('appointments.d_id','=',$d_id)->orderBy('date',"asc")->orderBy('time',"asc")->get(['appointments.*','patient_infos.name','patient_infos.mobile']);
        // dd($appointment);
        $patient_list = patient_infos::where('d_id','=',$doctor_info->id)->get('mobile');
        // dd($patient_list);
        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
        $startOfCalendar = $date->copy()->firstOfMonth(); //->startOfWeek(Carbon::SUNDAY);
        $endOfCalendar = $date->copy()->lastOfMonth();  //->endOfWeek(Carbon::SATURDAY);
        while($startOfCalendar <= $endOfCalendar)
        {
//            $date_lists[]= $startOfCalendar->format('j');
            $date_lists[]= $startOfCalendar->format('d/M/Y');
            $test[]= $startOfCalendar->format('D');
            $startOfCalendar->addDay();
        }
//        dd($date_lists,$test);
//        dd($date,$startOfCalendar,$endOfCalendar);

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

        return view('appointment',compact('doctor_info','appointment','patient_list','date_lists','test','total_cost','total_paid','total_due','notices','sub_remain'));
    }
    public function action(Request $request,$d_id,$mobile)
    {
        $patient_info = patient_infos::where('mobile','=',$mobile)->where('d_id','=',$d_id)->first();
        return response()->json([
            'status'=>200,
            'p_info' => $patient_info,
        ]);
        // return view('appointment',compact('doctor_info','appointment','patient_list'));
    }
    public function action2(Request $request,$id)
    {
        $chember_info = chember_info::find($id);
        return response()->json([
            'status'=>200,
            'c_info' => $chember_info,
        ]);
        // return view('appointment',compact('doctor_info','appointment','patient_list'));
    }
    public function index()
    {

        return view('index');
    }

    public function loginForm()
    {
        return view('loginForm');
    }

    public function patient()
    {

        return view('patient');
    }

    public function prescription_list()
    {
        return view('prescription_list');
    }

    public function treatment_plan()
    {
        return view('treatment_plan');
    }

    public function treatmentPlans()
    {
        return view('treatmentPlans');
    }

    public function registration()
    {
        return view('registration');
    }
    public function profile_edit()
    {
        return view('profile_edit');
    }

    public function login()
    {
        return view('login');
    }
    public function invoice()
    {
        return view('invoice');
    }
}
