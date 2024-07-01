<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('message', compact('messages'));
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'pesan' => 'required|string',
        ]);

        Message::create([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('contact')
            ->with('success', 'Message created successfully.');
    }
}
