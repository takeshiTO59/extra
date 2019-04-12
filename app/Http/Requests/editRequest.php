<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class editRequest extends FormRequest
{
    public function authorize()
    {
        if($this->path == 'original/public/edit/check'){
            return true;
        }else{
            return false;
        }
        
        }

    public function rules()
    {
        $param =['id' => $request->id];
        $item = DB::select('select * from article_table where password = :id',$param);
        
        return [
            'password' => 'different:$item->password',
        ];
    }
}
