<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMitraRequest;
use App\Mail\MitraUser;
use App\Mitra;
use App\Role_User;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class MitraController extends Controller
{
    //use MediaUploadingTrait;

    public function index()
    {
        $mitras = Mitra::all();

        return view('admin.mitra.index', compact('mitras'));
    }

    public function show(Mitra $mitra)
    {
        return view('admin.mitra.show', compact('mitra'));
    }

    public function destroy(Mitra $mitra)
    {
        $mitra->delete();

        return back();
    }

    public function massDestroy(MassDestroyMitraRequest $request)
    {
        Mitra::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function acc($id)
    {
        $random     = Str::random(8);
        $mitra      = Mitra::where('id', $id)->first();
        $slug_judul = Str::slug($mitra->nama);
        Company::create([
            'name'      => $mitra->nama,
            'deskripsi' => $mitra->deskripsi,
            'alamat'    => $mitra->alamat,
            'gambar'    => $mitra->logo,
            'alamat'    => $mitra->alamat,
            'slug'      => $slug_judul,
        ]);
        $user           = new User();
        $user->name     = $mitra->nama;
        $user->email    = $mitra->email;
        $user->password = Hash::make($random);
        $user->save();
        $mitra->idUser = $user->id;
        $mitra->save();
        $details = [
            'email'    => $mitra->email,
            'password' => $random,
        ];
        $role          = new Role_User();
        $role->user_id = $user->id;
        $role->role_id = 3;
        $role->save();

        Mail::to($mitra->email)->send(new MitraUser($details));

        return back();
    }
}
