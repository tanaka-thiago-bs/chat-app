<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ChatController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        Chat::create([
            'message' => $request->message,
            'user_id' => auth()->id(),
        ]);

        return Redirect::route('dashboard');
    }
}
