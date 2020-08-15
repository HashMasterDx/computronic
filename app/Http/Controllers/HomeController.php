<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function servicios()
    {
        return view('servicios');
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function gaming()
    {
        return view('gaming');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function admin()
    {
        return view('admin.Admin_profile');
    }
    public function Subirproducto()
    {
        return view('admin.Subirproducto');
    }

    public function ModificarProducto()
    {
        return view('admin.ModificarProducto');
    }

    public function EliminarProducto()
    {
        return view('admin.EliminarProducto');
    }
    public function Modificaruser()
    {
        return view('admin.Modificaruser');
    }
    
}
