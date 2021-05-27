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
            'listMenu'=> $globalData['listMenu'],
            'descriptionCT' => $globalData['descriptionCT'],
            'addressCT' => $globalData['addressCT'],
            'phoneCT' => $globalData['phoneCT'],
            'faxCT' => $globalData['faxCT'],
            'emailCT' => $globalData['emailCT'],
        ];

        return view('v_home',$data);
    }
}
