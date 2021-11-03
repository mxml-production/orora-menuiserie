<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Message;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $messages = Message::orderBy('created_at', 'desc')->get();
        $informations = Information::orderBy('id', 'asc')->get();
        return view('admin.dashboard', [
            'messages' => $messages,
            'informations' => $informations
        ]);
    }

    public function avis(){
        return view('admin.avis');
    }
}
