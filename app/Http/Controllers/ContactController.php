<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContactModel;


class ContactController extends Controller
{

    public function index(){
        $globalData = $this->globalData();
        $content = DB::table('contact_info')->get()->first();

        $data = [
            'description' => $content->description,
            'address' => $content->address,
            'phone' => $content->phone,
            'fax' => $content->fax,
            'email' => $content->email,
            'country'=> $globalData['listCountry']['result'],
            'listMenu'=> $globalData['listMenu']
        ];

        return view('v_contact',$data);
    }

    public function postForm(Request $request){

        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber')
        ];

        ContactModel::create($data);

        return redirect()->back();
    }
}
