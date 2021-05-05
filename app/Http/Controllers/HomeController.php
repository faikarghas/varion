<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index(){
        $globalData = $this->globalData();
        $slider = DB::table('slider')->where('page', 'home')->get();
        $content = DB::table('subsidiaries')->get();

        $data = [
            'slider' => $slider,
            'content' => $content,
            'country'=> $globalData['listCountry']['result'],
            'listMenu'=> $globalData['listMenu']
        ];

        return view('v_home',$data);
    }
}
