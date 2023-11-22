<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contrform extends Controller
{
    public function index(Request $req){
        return
            $req->input('email') .
            $req->input('password') .
            $req->input('password_confirmation') .
            $req->input('filiere') .
            $req->input('date') .
            $req->input('save'); 
    }
}
