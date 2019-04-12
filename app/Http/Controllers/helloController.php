<?php
global $head, $style, $body, $end;
$head = '<html><head>'
$style = <<<EOF
<style>
body {font-size:16; color:#999; }
h1 { font-size:100; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '<head></head>';
$end = '<body></head>';

function tag($tag, $txt){
    return ""
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editController extends Controller
{
    public function index(){
        return view('edit.index');
    }
}
