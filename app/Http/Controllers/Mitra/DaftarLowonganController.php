<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMitraRequest;
use App\Mitra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarLowonganController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();

        return view('mitra.lowongan.index', compact('mitra'));
    }

    public function edit($id)
    {
        $mitra = Mitra::where('id', $id)->first();

        return view('mitra.lowongan.edit', compact('mitra'));
    }

    public function create()
    {
        return view('mitra.lowongan.create');
    }

    public function store(StoreMitraRequest $request)
    {
        // dd($request);
        $user = User::create([
            'name'     => $request['username'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->roles()->sync(3);

        $cek           = User::where('name', $request['username'])->first();
        $mitra         = Mitra::where('email', $request['email'])->first();
        $mitra->idUser = $cek->id;
        $mitra->update();
        // $job->update($request->all());
        // $job->categories()->sync($request->input('categories', []));
        return view('mitra.home');
    }
}
