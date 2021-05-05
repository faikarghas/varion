<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function index(){
        $globalData = $this->globalData();
        $slider = DB::table('slider')->where('page', 'about')->get();
        $content = DB::table('about')->get()->first();

        $data = [
            'slider' => $slider,
            'name' => $content->name,
            'title' => $content->title,
            'description' => $content->description,
            'country'=> $globalData['listCountry']['result'],
            'listMenu'=> $globalData['listMenu']
        ];


        return view('v_about',$data);
    }
}
