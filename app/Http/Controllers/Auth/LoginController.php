<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginStoreRequest;

class LoginController extends Controller
{
    //

    public function login_view()
    {
        return view('auth.login');
    }


    public function store_login(Request $request){

        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required'

        ]);

        if(!Auth::attempt($request->only(['email', 'password']))) {

            return back()->with('status', 'Email ou mot de passe incorrect !');

        }

        return redirect('/products');

/*  */



    }
}
