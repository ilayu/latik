<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use Session;
use Auth;

class PageController extends MainController
{
    public function getPage($page, Request $request)
    {
      if ($p = User::where('name', '=', $page)->first()) {
        if (Auth::user() == $p) {
          $links = Auth::user()->links()->latest()->get();
          $texts = Auth::user()->texts()->latest()->get();
          return view('page', compact('p', 'links', 'texts'));
        }
        return view('form.signInForm', compact('page'));
      }
      return view('form.signUpForm', compact('page'));
    }

    public function signInForm(Request $request)
    {
      $this->validate($request, [
        'signInPass' => 'required'
      ]);

      $p = User::where('name', '=', $request->signInName)->first();
      if($p->password == $request->signInPass) {
        Auth::login($p);
        return redirect($request->signInName);
      }
      return redirect()->back();
    }

    public function signUpForm(Request $request)
    {
      $this->validate($request, [
        'signUpName' => 'required|alpha_dash',
        'signUpEmail' => 'email',
        'signUpPass' => 'required'
      ]);

      if($p = User::create(['name' => $request->signUpName, 'password' => $request->signUpPass, 'email' => $request->signUpEmail])) {
        Auth::login($p);
        return redirect($request->signUpName);
      }
      return redirect()->back();
    }

    public function logOut()
    {
      Auth::logout();
      return redirect()->route('welcome');
    }



    public function editId($page, $item, $id)
    {
      Session::put($item, $id);
      return redirect($page);
    }


    public function editFalse($item)
    {
      Session::forget($item);
      return redirect()->back();
    }

}
