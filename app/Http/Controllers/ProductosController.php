<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductosController extends Controller
{
  //Funcion que retorna la lista de los servicios a la vista
  public function VerProductosWeb()
  {
    $articulo = Producto::all();
    return view('galeria', compact('articulo'));
  }

  public function VerProductos()
  {
    $articulo = Producto::all();
    return view('galeria', compact('articulo'));
  }

  //Buscamos el documento que cumple con la clave y
  //procedemos a eliminarlo
  public function destroy(Request $request)
  {
    $_id = $request->input('_id');
    $articulo = Producto::find($_id);
    $articulo->delete($_id);
    return redirect()->back()->with(['message'=> 'Successfully deleted!!']);
  }


  //Fuincion de para editar un producto por el id
  public function editProducto(Request $request)
  {
    $_id = $request->input('_id');
    $producto = $request->input('producto');
    $descripcion = $request->input('descripcion');
    $existencia = $request->input('existencia');
    $categoria= $request->input('categoria');
    $imagen= $request->input('imagen');
    $num= $request->input('num');
    $precio= $request->input('precio');
    Producto::find($_id)->update([
                   'producto' => $producto,
                   'descripcion' => $descripcion,
                   'existencia' => $existencia,
                   'categoria' => $categoria,
                   'imagen' => $imagen,
                   'num' => $num,
                   'precio' => $precio,
                   'updated_at' => Carbon::now()
               ]);

  //  $articulo->save();
   return redirect()->back()->with(['message'=> 'Successfully update']);
  }
  public function insert(Request $request){
     $producto = new Producto();
     $producto->_id=$request->get('_id');
     $producto->producto=$request->get('producto');
     $producto->descripcion=$request->get('descripcion');
     $producto->existencia=$request->get('existencia');
     $producto->categoria=$request->get('categoria');
     $producto->imagen=$request->get('imagen');
     $producto->num=$request->get('num');
     $producto->precio=$request->get('precio');
     $producto -> save();
 return redirect()->back()->with(['message'=> 'Successfully insert']);
 }

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
      }

}
