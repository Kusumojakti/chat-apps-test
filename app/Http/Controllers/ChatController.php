<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ChatController extends Controller
{
    public function index()
    {
        $jsonData = storage_path('app/public/data/extended_chat_data.json');
        $chatData = json_decode(File::get($jsonData), true);

        return view('chat', compact('chatData'));
    }

    public function sidebarView()
    {
        $jsonData = storage_path('app/public/data/extended_chat_data.json');
        $chatData = json_decode(File::get($jsonData), true);

        return view('components.sidebar', compact('chatData'));
    }
}
