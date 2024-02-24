<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     
       
    public function admin(){
        return  view('Admin.admins.profile');
    }

     
}
