<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ],);


        $user = $request->except('confirm_password');
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return view('pages.auth.login');

    }

    public function showLogin()
    {
        return view('pages.auth.login');
    }

    public function showRegister()
    {
        return view('pages.auth.register');
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

if (Auth::attempt($credentials)) {
$request->session()->regenerate();
if(Auth::user()->email === 'admin@gmail.com'){
return redirect()->to('/halamanadmin');
}
return redirect()->to('/dashboard');

}else{
return redirect()->back()->withErrors(['error' => 'Login gagal. Email atau password salah.']);

}
    }


    public function showLoginAdmin()
    {
        return view('pages.auth.loginadmin');
    }

public function Logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerate();
return redirect()->to('/');
}




}
