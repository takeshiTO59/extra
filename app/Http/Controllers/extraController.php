<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class extraController extends Controller
{
    
    public function index(){
        $items = DB::select('SELECT * FROM article_table ORDER BY today DESC;');
        /*return $items;*/
        return view('list.index',['items'=>$items]);
    }
    
    public function post(Request $request){
        
        $items = DB::select("SELECT * FROM article_table WHERE title LIKE :search;", ['search'=>'%'.$request->search.'%']); 
        
        return view('list.index',['items'=>$items]);
    }

}

