<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubsidiariesController extends Controller
{
    public function index($slug){

        $globalData = $this->globalData();
        $slider = DB::table('slider')->where('page', $slug)->get();
        $content = DB::table('subsidiaries')->where('slug', $slug)->get()->first();

        if ($slug === 'fume-kopi-indonesia') {
            $data = [
                'slider' => $slider,
                'country'=> $globalData['listCountry']['result'],
                'listMenu'=> $globalData['listMenu'],
                'descriptionCT' => $globalData['descriptionCT'],
                'addressCT' => $globalData['addressCT'],
                'phoneCT' => $globalData['phoneCT'],
                'faxCT' => $globalData['faxCT'],
                'emailCT' => $globalData['emailCT'],
            ];
            return view('v_fumeKopi', $data);
        } else {
            $data = [
                'slider' => $slider,
                'name' => $content->name,
                'title' => $content->title,
                'description' => $content->description,
                'country'=> $globalData['listCountry']['result'],
                'listMenu'=> $globalData['listMenu'],
                'descriptionCT' => $globalData['descriptionCT'],
                'addressCT' => $globalData['addressCT'],
                'phoneCT' => $globalData['phoneCT'],
                'faxCT' => $globalData['faxCT'],
                'emailCT' => $globalData['emailCT'],
            ];

            return view('v_subsidiaries', $data);
        }


    }

    public function fume(){

        return view('v_fumeKopi.blade', $data);
    }
}
