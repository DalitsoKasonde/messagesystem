<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $messages = Message::where('user_id_to', Auth:user()->id);
        return view('home');
    }
}
