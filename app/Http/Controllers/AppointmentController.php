<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use DB;

class AppointmentController extends Controller
{
    //
    public function onlineForm()
    {
        //select * from table_name

        return view('online_appointment_form');
    }
    public function saveAppointment(Request $request)
    {
        $msg ='';
        if (isset($request->id)) {
            $app =  Appointment::find($request->id);

            $msg ='Updated';
        } else {
            $app = new Appointment();
            $msg ='inserted';
        }
        $app->patient_name = $request->patient_name;
        $app->doctor_name = $request->doc_name;
        $app->sl = 1;
        $app->save();
        return redirect('/appointment-list')->with('success', 'Data '. $msg);
    }
    public function appointList()
    {
        $appointment_data = Appointment::where('doctor_name', 'MKR')->get();
        //$appointment_data = DB::select('select * from appointments where doctor_name ='MKR' ');
        $appointment_data = DB::table('appointments')
            //s->where('doctor_name', 'MKR')
            ->get();
        return view('online_appointment_form', compact('appointment_data'));
    }
    public function showDetails($id)
    {
         $appointment_data = Appointment::find($id);
        // $appointment_data->delete();
       // $appointment_data = Appointment::where('id', $id)->delete();
     //   return redirect('/appointment-list')->with('success', 'Data Deleted');
        return view('online_details',compact('appointment_data'));
        // dd($appointment_data);
    }
    public function editAppointment($id)
    {
        $appoint_info = Appointment::find($id);
        return view('online_appointment_form', compact('appoint_info'));
    }
}
