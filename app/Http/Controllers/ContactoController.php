<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactoController extends Controller
{
    public function index()
    {
        $contacto = Contacto::all();
        return Inertia::render('Contactos/Index',[
            'contacto' => $contacto
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    $request->validate([
    'nombre' => 'required|max:80',
    'telefono' => 'required|max:15'
    ]);
    $contacto = new Contacto($request->input());
    $contacto->save();
    return redirect('contactos');
    }

    public function show(Contacto $contacto)
    {
        //
    }

    public function edit(Contacto $contacto)
    {

    }

    public function update(Request $request, Contacto $contacto)
    {
    $request->validate([
    'nombre' => 'required|max:80',
    'telefono' => 'required|max:15'
    ]);
    $contacto->update($request->input());
    return redirect('contactos');
    }

    public function destroy(Contacto $contacto)
    {
    $contacto->delete();
    return redirect('contactos');
    }
}
