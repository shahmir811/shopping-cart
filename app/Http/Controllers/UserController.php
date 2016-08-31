<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;


class UserController extends Controller
{
  public function getSignup()
  {
    return view ('user.signup');
  }

  public function postSignup(Request $request)
  {
    $this->validate($request, [
        'email' => 'email|required|unique:users',
        'password' => 'required|min:6'
    ]);

    $user = new User([
      'email' => $request->email,
      'password' => bcrypt($request->password)
    ]);

    $user -> save();

    Auth::login($user);

    return redirect() -> route('user.profile');

  }

  public function getSignin()
  {
    return view ('user.signin');
  }

  public function postSignin(Request $request)
  {

    $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:6'
    ]);

    if ( Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password') ]) )
    {
      return redirect() -> route('user.profile');
    }

    return redirect() -> back();

  }

  public function getProfile()
  {
    return view ('user.profile');
  }

  public function getLogout()
  {
    Auth::logout();
    return redirect() -> back();

  }


}