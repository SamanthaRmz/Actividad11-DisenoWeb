<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Crear una nueva instancia del modelo Contact
        $contact = new Contact();
        // Asignar los valores del formulario a las propiedades del modelo
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        // Guardar los datos en la base de datos
        $contact->save();

        // Redireccionar de vuelta al formulario de contacto con un mensaje de éxito
        return redirect()->back()->with('success', '¡La información se envió con éxito!');
    }
}
