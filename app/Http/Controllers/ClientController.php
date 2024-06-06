<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    public function getClientView()
    {
        return view('ClientManager');
    }
}
