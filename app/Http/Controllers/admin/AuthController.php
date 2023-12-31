<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'root') {
                return redirect()->route('root.admin.index');
            } elseif ($user->role == 'normal') {
                return redirect()->route('normal.admin.index');
            }
        }
        return back()->with('error', 'Email dan Password tidak cocok');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
