<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function create()
    {
       return view('auth.login');
    }


    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect('/admin');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
