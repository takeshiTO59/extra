<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responcse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class privacyController extends Controller
{
    public function policy(){
      
        return view('privacy.policy');
    }
    
}
