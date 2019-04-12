<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class detailController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $item = DB::table('article_table')->where('id',$id)->first();
        return view('detail.index',['item'=>$item]);
    }
}
