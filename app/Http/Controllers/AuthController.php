<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function index(){
        return view('admin.views.login');
    }

    public function proses_login(Request $request){
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        $credential = $request->only('username','password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user->level == 'admin') {
                return redirect()->intended('/admin');
            }

        }

        return redirect('admin.views.login');

    }


    public function proses_register(Request $request){
        $username = $request->get('username');
        $level = 'admin';
        $password = bcrypt($request->get('password'));

        $data = [
            'username' => $username,
            'level' => $level,
            'password' => $password,
        ];

        User::create($data);

        return response() ->json(['res' => $data]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

}
