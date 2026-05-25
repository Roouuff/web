<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
Public Function fti()
    {
        return view('user.fti');
    }

    public function fe()
    {
        return view('user.fe');
    }

    public function fip()
    {
        return view('user.fip');
    }

    public function ft()
    {
        return view('user.ft');
    }
}
