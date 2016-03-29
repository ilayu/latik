<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;
use App\User;
use App\Text;
use Auth;

class TextController extends MainController
{
    public function getText()
    {
      Session::put('content', 'text');
      Session::put('form', 'addtext');
      return redirect()->back();
    }

    public function addText($page, Request $request)
    {
      $this->validate($request, [
        'text' => 'required'
      ]);
      // User::where('name', '=', $page)->texts()->create($request);
      Text::create(['text' => $request->text, 'user_id' => Auth::id()]);
      return redirect($page);
    }


    public function delId($page, $id)
    {
      if (Auth::user()->texts()->find($id)) {
        Text::destroy($id);
      }
      return redirect($page);
    }

    public function editText($page, $id, Request $request)
    {
      $this->validate($request, [
        'text' => 'required'
      ]);
      if (Auth::user()->texts()->find($id)) {
        Text::find($id)->update(['text' => $request->text]);
      }
      Session::forget('text');
      return redirect($page);
    }
}
