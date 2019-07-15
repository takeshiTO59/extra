<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responcse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class aboutController extends Controller
{
    public function description(){
      
        return view('about.description');
    }

}
