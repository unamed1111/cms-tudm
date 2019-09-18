<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        //validate input
        $this->validate($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
    }

    protected function validate(request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
    }

    protected attemptLogin($request)
    {
        return Auth::attemp()
    }
}