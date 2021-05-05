<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    //
    public function index(){
        $globalData = $this->globalData();
        $listCareer = DB::table('career')->get();
        $careerInfo = DB::table('career_info')->get()->first();

        $data = [
            'listCareer'=> $listCareer,
            'title'=> $careerInfo->title,
            'description'=> $careerInfo->description,
            'country'=> $globalData['listCountry']['result'],
            'listMenu'=> $globalData['listMenu']
        ];

        return view('v_career',$data);
    }
}
