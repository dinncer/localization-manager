<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\LoginRequest;
use Auth;
use Lang;

class LoginController extends AdminController
{
    /**
     * Administrator login.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Check and redirect administrator login.
     *
     * @param  LoginRequest $request
     * @return void
     */
    public function login(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email, 'password'=>$password, 'role'=>1])) {
            return redirect('admin/dashboard');
        } else {
            return back()->with(['message' => Lang::get('admin.sign_error_message')]);
        }
    }

    /**
     * Administrator logout.
     *
     * @return Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
