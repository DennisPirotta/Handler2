<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        return view('chat.index',[
            'messages' => Message::with('user')->get(),
            'users' => User::all()
        ]);
    }
}
