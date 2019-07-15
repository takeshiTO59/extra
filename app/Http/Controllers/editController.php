<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class editController extends Controller
{
    public function check(Request $request){
        
        $param =['id' => $request->id];
        
        $item = DB::select('select * from article_table where id = :id',$param);
        return view('edit.check',[
            'msg'=>0,           //入力前の表示
            'form'=> $item[0]
            ]);
    }
    
     public function confirmerror(Request $request){
        $id = $request->session()->get('id');
        $password = $request->session()->get('password');
        
        $param =[
                'id' => $id,
                'password' => $password
                ];
                
        $item = DB::select('select today, nickname, title, id, deadline, format, period, location, contents, role, video, caution, contact from article_table where id = :id and password = :password',$param);
        return view('edit.index',['form'=> $item[0]]);
    }
    
    
    
    public function confirmcheck(Request $request){
        $validate_rule = [
            'id' => 'required',
            'password' => 'required',
            ];
        $this->validate($request, $validate_rule);
    
        $hashedpassword = DB::table('article_table')->where('id', $request->id)->value('password');
        
        if (Hash::check($request->password, $hashedpassword)) {
            $request->session()->put('id', $request->id);
            $request->session()->put('password',$hashedpassword);
            // 一致したときの処理
            $param =[
                'id' => $request->id,
                'password' => $hashedpassword
                ];
            $item = DB::select('select today, nickname, title, id, deadline, format, period, location, contents, role, video, caution, contact from article_table where id = :id and password = :password',$param);
            return view('edit.index',['form'=> $item[0]]);
        } else {
            $request->session()->flush();
            // 一致しなかったときの処理
            $item = DB::select('select nickname,title,id from article_table where id = :id',['id' => $request->id]);
            return view('edit.check',[
                'msg'=>1,
                'form'=> $item[0]
                ]);
        }
    
    }

    public function confirm(Request $request){
        $validate_rule = [
            'title' => 'required',
            'nickname' => 'required',
            'password' =>'required'
            ];
        $this->validate($request, $validate_rule);
        
/*        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'nickname' => 'required',
            'password' =>'required'
            ]);
            
        if ($validator->fails()) {
            return redirect('edit/index')
                ->withErrors($validator)
                ->withInput();
                }
        
*/
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
            'video' =>$request->video,
            'caution' =>$request->caution,
            'contact' =>$request->contact,
            ];
        
        DB::update('update article_table set today =:today, nickname = :nickname, title = :title, password = :password, deadline = :deadline, format = :format, period = :period, location = :location, contents = :contents, role = :role, video = :video, caution = :caution, contact = :contact where id = :id', $param);    
        return view('edit.complete');
    } 
    
    
    
}


