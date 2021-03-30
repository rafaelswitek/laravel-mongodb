<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        return Carro::all();
    }

    public function store(Request $request)
    {
        $carro = new Carro();
        $carro->marca = $request->get('marca');
        $carro->modelo = $request->get('modelo');
        $carro->preco = $request->get('preco');
        $carro->save();
        return $carro;
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::find($id);
        $carro->marca = $request->get('marca');
        $carro->modelo = $request->get('modelo');
        $carro->preco = $request->get('preco');
        $carro->save();
        return $carro;
    }

    public function destroy($id)
    {
        $carro = Carro::find($id);
        $carro->delete();
        return true;
    }
}
