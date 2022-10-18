<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function messages() {
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('admin.messages', compact('data'));
    }
    public function docprofile() {
        return view('admin.docprofile');
    }
    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}