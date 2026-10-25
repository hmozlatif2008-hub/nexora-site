<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function submit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        return redirect()->route('contact')->with(
            'contact_status',
            'Formulaire validé. Cette maquette ne transmet ni n’enregistre votre message. Vous pouvez utiliser l’adresse exemple ci-contre.',
        );
    }
}
