<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Hotel;
use Illuminate\Support\Facades\Input;


class ControladorExamen extends Controller
{

	   public function store(Request $request)
        {
            // Validate the request...

            $cliente = new Cliente;

            $cliente->nif = Input::get('nif');
             $cliente->nombre= Input::get('nombre');
             $cliente->apellido = Input::get('apellido');
             $cliente->telefono = Input::get('telefono');

            $cliente->save();

            return redirect('/');
        }

        public function getClientes(){
        $clientes = Cliente::all();
        return view('cliente.index', ['clientes' => $clientes]);
        }

        public function getHoteles(){
        $hoteles = Hotel::all();
        return view('hotel.index', ['hoteles' => $hoteles]);
        }
   
   
}
