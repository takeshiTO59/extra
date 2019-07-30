<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responcse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class newController extends Controller
{
    public function input(){
      
        return view('article.input');
    }
    
    public function confirm(Request $request){
        $validate_rule = [
            'title' => 'required',
            'nickname' => 'required',
            'password' => 'required',
            'contact'  => 'required',
            'location' => 'max:100',
            'role'     => 'max:100',
            'contents' => 'max:5000',
            'caution'  => 'max:5000'
        ];
        
        $this->validate($request, $validate_rule);
       
        $hashed = Hash::make($request->password);
        
        $title = $request->title;
        $nickname = $request->nickname;
        $password = $hashed;
        $deadline = $request->deadline;
        $format = $request->format;
        $period = $request->period;
        $location = $request->location;
        $contents = $request->contents;
        $role = $request->role;
        $video = $request->video;
        $caution = $request->caution;
        $contact = $request->contact;
        
        $dt = Carbon::now();
        $today = $dt->timestamp;
        
        $data = [
            'today' =>$today,
            'title' =>$title,
            'nickname' =>$nickname,
            'password' =>$password,
            'deadline'=>$deadline,
            'format' =>$format,
            'period' =>$period,
            'location' =>$location,
            'contents' =>$contents,
            'role' =>$role,
            'video' =>$video,
            'caution' =>$caution,
            'contact'=>$contact, 
            ];
        
        return view('article.confirm',$data);
    }
    
    public function create(Request $request){
       
        $param = [
            'today' =>$request->today,
            'nickname' =>$request->nickname,
            'title' =>$request->title,
            'password' =>$request->password,
            'deadline' =>$request->deadline,
            'format' =>$request->format,
            'period' =>$request->period,
            'location' =>$request->location,
            'contents' =>$request->contents,
            'role' =>$request->role,
            'video' =>$request->video,
            'caution' =>$request->caution,
            'contact' =>$request->contact,
            ];
            
        DB::insert('insert into article_table(today, nickname, title, password, deadline, format, period, location, contents, role, video, caution, contact) values(:today, :nickname, :title, :password, :deadline, :format, :period, :location, :contents, :role, :video, :caution, :contact)', $param);
        return view('article.complete');
    } 

}
