<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubsidiariesModel;
use App\Models\AboutModel;
use App\Models\ContactInfoModel;
use App\Models\CareerModel;

class AdminController extends Controller
{
    public function __construct() { $this->middleware('preventBackHistory'); $this->middleware('auth'); }

    public function index(){
        return view('admin.views.home');
    }

    // SUBSIDIARIES
    public function subsidiaries(){
        $subsidiaries = DB::table('subsidiaries')->get();

        $data = [
            'subsidiaries' => $subsidiaries
        ];

        return view('admin.views.subsidiaries.index',$data);
    }

    public function edit_subsidiaries($id){
        $subsidiaries = DB::table('subsidiaries')->where('idSubsidiaries',$id)->get();

        $data = [
            'subsidiaries' => $subsidiaries
        ];

        return view('admin.views.subsidiaries.edit',$data);
    }


    public function post_subsidiaries(Request $request,$id){

        $subsidiaries = DB::table('subsidiaries')->where('idSubsidiaries',$id)->get();
        $detail=$request->summernoteInput;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }

        $detail = $dom->savehtml();
        // $summernote = new Summernote;
        // $summernote->content = $detail;
        // $summernote->save();


        $imageName1 = $request->image1 ?  $request->image1->getClientOriginalName() : $subsidiaries[0]->imageFront;
        $imageName2 = $request->image2 ?  $request->image2->getClientOriginalName() :  $subsidiaries[0]->imageBack;
        $imageName3 = $request->image3 ?  $request->image3->getClientOriginalName() :  $subsidiaries[0]->imageHome;
        $imageName4 = $request->image4 ?  $request->image4->getClientOriginalName() :  $subsidiaries[0]->imagHome1;
        $imageName5 = $request->image5 ?  $request->image5->getClientOriginalName() :  $subsidiaries[0]->imagHome2;
        $imageName6 = $request->image6 ?  $request->image6->getClientOriginalName() :  $subsidiaries[0]->imageHeader1;
        $imageName7 = $request->image7 ?  $request->image7->getClientOriginalName() :  $subsidiaries[0]->imageHeader2;
        $imageName8 = $request->image8 ?  $request->image8->getClientOriginalName() :  $subsidiaries[0]->imageInvesment;
        $imageName9 = $request->image9 ?  $request->image9->getClientOriginalName() :  $subsidiaries[0]->imageBusiness;
        $imageName10 = $request->image10 ?  $request->image10->getClientOriginalName() :  $subsidiaries[0]->imageCapital;
        $imageName11 = $request->image11 ?  $request->image11->getClientOriginalName() :  $subsidiaries[0]->imageFooter;
        $imageName12 = $request->image12 ?  $request->image12->getClientOriginalName() :  $subsidiaries[0]->imageFooter2;

    

        $request->image1 ? $request->image1->move(public_path('images/'), $imageName1) : "";
        $request->image2 ? $request->image2->move(public_path('images/'), $imageName2) : "";
        $request->image3 ? $request->image3->move(public_path('images/'), $imageName3) : "";
        $request->image4 ? $request->image4->move(public_path('images/'), $imageName4) : "";
        $request->image5 ? $request->image5->move(public_path('images/'), $imageName5) : "";
        $request->image6 ? $request->image6->move(public_path('images/'), $imageName6) : "";
        $request->image7 ? $request->image7->move(public_path('images/'), $imageName7) : "";
        $request->image8 ? $request->image8->move(public_path('images/'), $imageName8) : "";
        $request->image9 ? $request->image9->move(public_path('images/'), $imageName9) : "";
        $request->image10 ? $request->image10->move(public_path('images/'), $imageName10) : "";
        $request->image11 ? $request->image11->move(public_path('images/'), $imageName11) : "";
        $request->image12 ? $request->image12->move(public_path('images/'), $imageName12) : "";
        

        $dataInput = [
            'name' => $request->input('name'),
            'title' => $request->input('title'),   
            'titleHome' => $request->input('titleHome'),   
            'titleHeader' => $request->input('titleHeader'),   
            'shortDescription' => $request->input('shortDescription'),   
            'shortDescriptionHome' => $request->input('shortDescriptionHome'),   
            'description' => $detail,
            'imageFront' => $imageName1,
            'imageBack' => $imageName1,
            'imageHome' => $imageName1,
            'imagHome1' => $imageName1,
            'imagHome2' => $imageName1,
            'imageHeader1' => $imageName1,
            'imageHeader2' => $imageName1,
            'imageInvesment' => $imageName1,
            'imageBusiness' => $imageName1,
            'imageCapital' => $imageName1,
            'imageFooter' => $imageName1,
            'imageFooter2' => $imageName1,
        ];

        // SubsidiariesModel::updateOrCreate(
        //     [
        //       'idSubsidiaries'  => $id,
        //     ], $dataInput
        // );

        SubsidiariesModel::where('idSubsidiaries', $id)
        ->update($dataInput);

        return redirect()->back();
    }

    // ABOUT

    public function about(){
        $about = DB::table('about')->get();

        $data = [
            'about' => $about
        ];

        return view('admin.views.about.index',$data);
    }

    public function edit_about($id){
        $about = DB::table('about')->where('idAbout',$id)->get();

        $data = [
            'about' => $about
        ];

        return view('admin.views.about.edit',$data);
    }

    public function post_about(Request $request,$id){

        $about = DB::table('about')->where('idAbout',$id)->get();
        $detail=$request->summernoteInput;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }

        $detail = $dom->savehtml();

        $dataInput = [
            'name' => $request->input('name'),
            'title' => $request->input('title'),   
            'description' => $detail,   
            'investment' => $request->input('investment'),   
            'business' => $request->input('business'),   
            'capital' => $request->input('capital')
        ];


        AboutModel::where('idAbout', $id)
        ->update($dataInput);

        return redirect()->back();
    }

    // CONTACT

    public function contact(){
        $contact = DB::table('contact')->get();

        $data = [
            'contact' => $contact
        ];

        return view('admin.views.contact.index',$data);
    }

    public function edit_contact(){
        $contact = DB::table('contact_info')->where('idContactInfo',1)->get();

        $data = [
            'contact' => $contact
        ];

        return view('admin.views.contact.edit',$data);
    }

    public function post_contact(Request $request){
        $contact = DB::table('contact_info')->where('idContactInfo',1)->get();

        $data = [
            'contact' => $contact
        ];

        $dataInput = [
            'description' => $request->input('description'),
            'address' => $request->input('address'),   
            'phone' => $request->input('phone'),   
            'fax' => $request->input('fax'),   
            'email' => $request->input('email'),   
        ];

        ContactInfoModel::where('idContactInfo', 1)
        ->update($dataInput);
        return redirect()->back();

    }

    // CAREER

    public function career(){
        $career = DB::table('career')->get();

        $data = [
            'career' => $career
        ];

        return view('admin.views.career.index',$data);
    }

    public function create_career(){

     

        return view('admin.views.career.create');
    }

    public function edit_career($id){
        $career = DB::table('career')->where('idCareer',$id)->get();

        $data = [
            'career' => $career
        ];

        return view('admin.views.career.edit',$data);
    }

    public function post_create_career(Request $request){
        $dataInput = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),   
            'location' => $request->input('location'),   
        ];

        CareerModel::create($dataInput);


        return redirect()->route('career');
    }

    public function post_edit_career(Request $request,$id){

        $dataInput = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),   
            'location' => $request->input('location'),   
        ];


        CareerModel::where('idCareer', $id)
        ->update($dataInput);

        return redirect()->back();
    }
}
