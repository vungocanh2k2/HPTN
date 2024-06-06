<?php

namespace App\Http\Controllers;

class StaffController extends Controller
{
    public function getStaffView()
    {
        return view('EmployeeManager');
    }
}
