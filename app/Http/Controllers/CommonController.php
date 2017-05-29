<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CommonController extends Controller
{
        public function insert(){
        	$number = 210000001; 
        for ($i=1; $i < 200001; $i++) {
            DB::table('ETKPLUS_CARDS')
              ->insert(['number' => $number , 'is_active' => 0, 'is_blocked' => 0]);
            $number++;
        }
        return view('index');
    }
}
