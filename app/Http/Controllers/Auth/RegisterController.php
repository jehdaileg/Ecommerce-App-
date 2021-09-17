<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function register_view()
    {
        return view('auth.register');
    }

    public function storeUser(StoreUserRequest $request)
    {

        $datas = [

            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'localisation' => $request->localisation,
            'password' =>  Hash::make($request->password)

        ];

        $user = User::create($datas);

        $this->storeImage($user);


        Auth::attempt($request->only(['email', 'password']));


        return redirect('/products');

    }

    public function storeImage(User $user){

        if(request('image'))
        {
            $user->update([

                'image' => request('image')->store('avatars', 'public')

            ]);
        }

    }
}
