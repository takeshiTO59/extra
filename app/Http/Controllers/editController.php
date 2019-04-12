<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class editController extends Controller
{
    public function check(Request $request){
        
        $param =['id' => $request->id];
        $item = DB::select('select * from article_table where id = :id',$param);
        return view('edit.check',[
            'msg'=>0,
            'form'=> $item[0]
            ]);
    }
    
    public function index(Request $request){
        $validate_rule = [
            'id' => 'required',
            'password' => 'required',
            ];
        $this->validate($request, $validate_rule);
        
        $param =[
            'id' => $request->id,
            'password' => $request->password,
                ];
        
        $item = DB::select('select today, nickname, title, id, password, deadline, format, period, location, contents, role, image, video, caution, contact from article_table where id = :id and password = :password',$param);
        if(count($item) == 0){
            //ログイン失敗の時
            $item = DB::select('select nickname,title,id from article_table where id = :id',['id' => $request->id]);
            return view('edit.check',[
                'msg'=>1,
                'form'=> $item[0]
                ]);
        }else{
            //ログイン成功時の処理
            
            return view('edit.index',['form'=> $item[0]]); 
        }
        
        /*return view('edit.index',['form'=> $item[0]]);*/
    }

    public function confirm(Request $request){
        $validate_rule = [
            'title' => 'required',
            'nickname' => 'required',
            'password' =>'required'
            ];
        $this->validate($request, $validate_rule);
        
        $id = $request->id;
        $title = $request->title;
        $nickname = $request->nickname;
        $password = $request->password;
        
        $title = $request->title;
        $nickname = $request->nickname;
        $password = $request->password;
        $deadline = $request->deadline;
        $format = $request->format;
        $period = $request->period;
        $location = $request->location;
        $contents = $request->contents;
        $role = $request->role;
        $image = $request->image;
        $video = $request->video;
        $caution = $request->caution;
        $contact = $request->contact;
        
        $dt = Carbon::now();
        $today = $dt->timestamp;
        
        
        
        $data = [
            'today' =>$today,
            'id' => $id,
            'title' =>$title,
            'nickname' =>$nickname,
            'password' =>$password,
            
            'deadline'=>$deadline,
            'format' =>$format,
            'period' =>$period,
            'location' =>$location,
            'contents' =>$contents,
            'role' =>$role,
            'image' =>$image,
            'video' =>$video,
            'caution' =>$caution,
            'contact'=>$contact, 
            
            
            ];
        
        return view('edit.confirm',$data);
    }
    
    public function update(Request $request){
        
        $param = [
            'today' =>$request->today,
            'nickname' => $request->nickname,
            'title' => $request->title,
            'id' =>$request->id,
            'password' =>$request->password,
            
            'deadline' =>$request->deadline,
            'format' =>$request->format,
            'period' =>$request->period,
            'location' =>$request->location,
            'contents' =>$request->contents,
            'role' =>$request->role,
            'image' =>$request->image,
            'video' =>$request->video,
            'caution' =>$request->caution,
            'contact' =>$request->contact,
            ];
        
        DB::update('update article_table set today =:today, nickname = :nickname, title = :title, password = :password, deadline = :deadline, format = :format, period = :period, location = :location, contents = :contents, role = :role, image = :image, video = :video, caution = :caution, contact = :contact where id = :id', $param);    
        return view('edit.complete');
    } 
    
    
    
}


