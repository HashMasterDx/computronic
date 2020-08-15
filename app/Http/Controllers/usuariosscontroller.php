<?php

namespace App\Http\Controllers;
use App\usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;

class usuariosscontroller extends Controller
{
    public function editUser(Request $request)
    {
      $_id = $request->input('_id');
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      usuario::find($_id)->update([
                     '_id' => $_id,
                     'name' => $name,
                     'email' => $email,
                     'password' => $password,
                     'updated_at' => Carbon::now()
                 ]);

                 //  $articulo->save();
   return redirect()->back()->with(['message'=> 'Successfully update']);
      }
}
