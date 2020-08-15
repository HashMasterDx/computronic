<?php

namespace App\Http\Controllers;
use App\usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;



class usuariosscontroller extends Controller
{

    public function del(Request $request)
      {
        $_id = $request->input('_id');
        $id = usuario::find($_id);
        $id->delete($_id);
        return redirect()->back()->with(['message'=> 'Successfully deleted!!']);
      }

  //Fuincion de para editar un usuario por el id
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

                 
   return redirect()->back()->with(['message'=> 'Successfully update']);
      }
}
