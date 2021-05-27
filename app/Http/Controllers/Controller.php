<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkLogin(){

        if(Auth::check()) {
          $statusLogin = "logout";
        } else {
          $statusLogin = "login";
        }

        // dd(Auth::check());

        return $statusLogin;
    }

    public function globalData(){
      $response = Http::get('https://api.printful.com/countries');
      $listCountry = $response->json();
      $listMenu = DB::table('subsidiaries')->select('name','slug')->get();
      $contact = DB::table('contact_info')->get()->first();

      $data = [
        'listCountry' => $listCountry,
        'listMenu' => $listMenu,
        'descriptionCT' => $contact->description,
        'addressCT' => $contact->address,
        'phoneCT' => $contact->phone,
        'faxCT' => $contact->fax,
        'emailCT' => $contact->email,
      ];


      return $data;
    }
}
