<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Models\User;


class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('user.register');
    }

    public function register(Request $request): RedirectResponse
   {
       // validate form
      $request->validate([
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
       ]);


      User::create([
         'name' => $request -> name,
         'email' => $request -> email,
         'password' => $request -> password,
           ]);

      return redirect()->route("user.index");
}
}