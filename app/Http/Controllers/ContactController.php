<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact'); // Asegúrate de que 'contact' sea el nombre de tu vista Blade
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
            'mensaje' => 'required|string',
            'recaptcha_token' => 'required|string',
        ]);

        // Verificar reCAPTCHA
        $recaptcha = $this->verifyRecaptcha($request->recaptcha_token);

        if (!$recaptcha['success']) {
            return back()->withErrors(['recaptcha' => 'Verificación de reCAPTCHA fallida.']);
        }

        ContactMessage::create($validated);

        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
    }

    private function verifyRecaptcha($token)
    {
        $secretKey = '6LfdSnoqAAAAALqvLr_Wb6NyjFR133l9jaZ3xy6x';
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $token
        ]);

        return $response->json();
    }
}
