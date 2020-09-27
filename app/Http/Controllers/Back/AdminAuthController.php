<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function index () {
        return view('back.admin.index');
    }
    public function adminAuth (Request $request) {
        if (Auth::attempt(['email' => $request->post('email') , 'password' => $request->post('password')])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->withErrors('email veya şifre hatalı');
    }
    public function logout () {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
