<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
   public function index(): View
   {
    return view("user.index");
   }

   public function login(Request $request) : RedirectResponse
   {
      $request->validate([
         'email'          => 'required',
         'password'       => 'required',
     ]);

   $user = User::where('email', $request->email)->first();  
     if ($user){
        if($user->password == $request->password){
           return redirect()->route('schedule.index')->with(['success' => 'Berhasil Login']);
        }else{
            return redirect()->route("user.index")->with(['error' => 'Gagal Login - pass salah']);
        }
      }
      return redirect()->route("user.index")->with(['error' => 'Gagal Login - Email salah']);
   }

}