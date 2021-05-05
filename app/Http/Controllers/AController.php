<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AController extends Controller
{

    public function index(Request $request){
        $globalData = $this->globalData();
        $currentURL = url()->current();
        $segment_posts = request()->segment(1);
        $data = [
            'country'=> $globalData['listCountry']['result'],
            'listMenu'=> $globalData['listMenu']
        ];

        return view('v_sbk',$data);
    }
}
