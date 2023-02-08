<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\SessionClass;

class ApiController extends Controller
{
    


    public function patientAppointments(){
        $obj = new SessionClass();
        $patId = $obj->getPatientId();

        $res = Http::post("127.0.0.1:port/PAGE", [
            "patientId" => $patId
        ]);
        $patAppointments = json_decode($res, true);

        $listAppointment = $patAppointments['listAppointments'];

        return view('allAppointments', compact(['patAppointments', 'listAppointment']));
    }
}