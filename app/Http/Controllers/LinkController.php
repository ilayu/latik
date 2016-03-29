<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;
use App\User;
use App\Link;
use Auth;

class LinkController extends MainController
{
    public function getLink()
    {
      Session::put('content', 'link');
      return redirect()->back();
    }

    public function addLink($page, Request $request)
    {
      $this->validate($request, [
        'link' => 'required|url'
      ]);
      // User::where('name', '=', $page)->texts()->create($request);
      Link::create(['link' => $request->link, 'name' => $request->name, 'user_id' => Auth::id()]);
      return redirect($page);
    }


    public function delId($page, $id)
    {
      if (Auth::user()->links()->find($id)) {
        Link::destroy($id);
      }
      return redirect($page);
    }

    public function editLink($page, $id, Request $request)
    {
      $this->validate($request, [
        'link' => 'required'
      ]);
      if (Auth::user()->links()->find($id)) {
        Link::find($id)->update(['link' => $request->link, 'name' => $request->name]);
      }
      Session::forget('link');
      return redirect($page);
    }
}
