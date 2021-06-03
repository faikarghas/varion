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
                'slug' => $content->slug,
                'name' => $content->name,
                'title' => $content->title,
                'titleHeader' => $content->titleHeader,
                'description' => $content->description,
                'imageFront' => $content->imageFront,
                'imageBack' => $content->imageBack,
                'imageHeader1' => $content->imageHeader1,
                'imageHeader2' => $content->imageHeader2,
                'imageInvestment' => $content->imageInvesment,
                'imageBusiness' => $content->imageBusiness,
                'imageCapital' => $content->imageCapital,
                'imageFooter' => $content->imageFooter,
                'imageFooter2' => $content->imageFooter2,
                'imageFooterDesc' => $content->imageFooterDesc,
                'imageFooter2Desc' => $content->imageFooter2Desc,
                'imageFooterType' => $content->imageFooterType,
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
