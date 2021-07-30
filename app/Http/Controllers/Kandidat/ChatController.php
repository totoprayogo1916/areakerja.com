<?php

namespace App\Http\Controllers\Kandidat;

use App\Chat;
use App\Http\Controllers\Controller;
use App\Lowonganmitra;
use App\Mitra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Kandidat;

class ChatController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();
        $messages = Chat::where('sent', $mitra->id)->orWhere('receive', $mitra->id)->orderBy('id', 'ASC')->get();
        $users = Chat::where('receive', $user_id)->orderBy('id', 'ASC')->get()->unique('sent');
        $user = User::where('id', $user_id)->first();

        return view('kandidat.chat.index', compact('mitra', 'user', 'messages', 'users'));
    }

    public function show($id)
    {
        // $sender = User::findOrFail($id);

        // $users = User::with(['message' => function ($query) {
        //     return $query->orderBy('created_at', 'DESC');
        // }])->where('is_admin', false)
        //     ->orderBy('id', 'DESC')
        //     ->get();

        // if (auth()->user()->is_admin == true) {
        //     $messages = Message::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        // } else {
        //     $messages = Message::where('user_id', $sender)->orWhere('receiver', $sender)->orderBy('id', 'DESC')->get();
        // }


        $user_id = auth()->user()->id;
        $sender = User::findOrFail($id);
        $mitra   = Kandidat::where('idUser', $user_id)->first();
        $messages = Chat::where([['sent', $sender->id], ['receive', $user_id]])->orWhere([['sent', $user_id], ['receive', $sender->id]])->orderBy('id', 'ASC')->get();
        $users = Chat::where('receive', $user_id)->orderBy('id', 'ASC')->get()->unique('sent');
        $user = User::where('id', $user_id)->first();
        $idrefresh = $id;
        return view('kandidat.chat.show', compact('mitra', 'user', 'messages', 'users', 'idrefresh'));

        // return view('show', [
        //     'users' => $users,
        //     'messages' => $messages,
        //     'sender' => $sender,
        // ]);
    }

    public function seger($id)
    {
        // $sender = User::findOrFail($id);

        // $users = User::with(['message' => function ($query) {
        //     return $query->orderBy('created_at', 'DESC');
        // }])->where('is_admin', false)
        //     ->orderBy('id', 'DESC')
        //     ->get();

        // if (auth()->user()->is_admin == true) {
        //     $messages = Message::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        // } else {
        //     $messages = Message::where('user_id', $sender)->orWhere('receiver', $sender)->orderBy('id', 'DESC')->get();
        // }


        $user_id = auth()->user()->id;
        $sender = User::findOrFail($id);
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $messages = Chat::where([['sent', $sender->id], ['receive', $user_id]])->orWhere([['sent', $user_id], ['receive', $sender->id]])->orderBy('id', 'ASC')->get();
        $users = Chat::where('receive', $user_id)->orderBy('id', 'ASC')->get()->unique('sent');
        $user = User::where('id', $user_id)->first();
        $idrefresh = $id;
        return view('kandidat.chat.chatbox', compact('mitra', 'user', 'messages', 'users', 'idrefresh'));

        // return view('show', [
        //     'users' => $users,
        //     'messages' => $messages,
        //     'sender' => $sender,
        // ]);
    }

    public function send(Request $request)
    {
        // $sender = User::findOrFail($id);

        // $users = User::with(['message' => function ($query) {
        //     return $query->orderBy('created_at', 'DESC');
        // }])->where('is_admin', false)
        //     ->orderBy('id', 'DESC')
        //     ->get();

        // if (auth()->user()->is_admin == true) {
        //     $messages = Message::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        // } else {
        //     $messages = Message::where('user_id', $sender)->orWhere('receiver', $sender)->orderBy('id', 'DESC')->get();
        // }



        $user_id = auth()->user()->id;
        $sender = User::findOrFail($request->id);
        $mitra   = Mitra::where('idUser', $user_id)->first();
        Chat::create([
            'text'              => $request['text'],
            'sent' => $user_id,
            'receive' => $request->id
        ]);




        // return view('show', [
        //     'users' => $users,
        //     'messages' => $messages,
        //     'sender' => $sender,
        // ]);

        return response()->json(['success' => 'Berhasil']);
    }
}
