<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('students');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout( Request $request)
    {
       Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('login');

    }
//     public function store_register(Request $request)
//     {
//      $user = new User();
//      $user->name = $request->name;
//      $user->email = $request->email;
//      $user->password = $request->password;
//      $user->save();

//     return redirect('login')->with('success', 'Registration successful!');
// }

public function store_register(Request $request)
{
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    $user->assignRole('student');

    return redirect('login')->with('success', 'Registration successful!');
}

    public function dashboard()
    {
        if (Auth::check()) {
            return view('students.index');
        }
    }

}
