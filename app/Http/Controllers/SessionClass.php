<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionClass extends Controller
{
    public function getPatientId() {
        return session()->get('patientId');
    }

    public function setPatientId($value) {
        session()->put('patientId', $value);
    }

    public function getcontactNumber() {
        return session()->get('contactNumber');
    }


    public function setcontactNumber($value) {
        session()->put('contactNumber', $value);
    }
}
