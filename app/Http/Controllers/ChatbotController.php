<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knowledge;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $userMessage = $request->input('message');

        // Busca una respuesta en la base de datos de conocimiento
        $response = Knowledge::where('question', 'LIKE', '%' . $userMessage . '%')->first();

        // Si no encuentra una respuesta
        if (!$response) {
            return response()->json(['reply' => 'Lo siento, no tengo una respuesta para eso. Por favor, contacta a un asesor en WhatsApp.']);
        }

        return response()->json(['reply' => $response->answer]);
    }
}
