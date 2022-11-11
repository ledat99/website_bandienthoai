<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginAdminRequest;

class LoginController extends Controller
{
    //
    public function login(){
        return view('admin.login');
    }
    public function loginPost(LoginAdminRequest $request)
    {
        echo '1';
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            echo '2';
            
            return redirect()->route('dashboard');
        }
        else {
            echo '3';
            return redirect()->back()->with('error','Thông tin đăng nhập không chính xác');
        }
    }
    
}
