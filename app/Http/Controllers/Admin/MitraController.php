<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMitraRequest;
use App\Mitra;
use App\Role_User;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function addmitra($id)
    {
        $mitra  = mitra::where('id', $id)->first();
        $random = Str::random(8);

        return view('admin.mitra.create', compact('mitra', 'random'));
    }

    public function acc($id, Request $request)
    {
        $random = Str::random(8);
        $mitra  = Mitra::where('id', $id)->first();
        File::copy(public_path("img/mitralogo/{$mitra->logo}"), public_path("image/{$mitra->logo}"));
        File::copy(public_path("img/mitralogo/{$mitra->logo}"), public_path("img/companylogo/{$mitra->logo}"));
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
        $user->password = $request->password;
        $user->save();
        $mitra->idUser = $user->id;
        $mitra->save();
        $details = [
            'email'    => $mitra->email,
            'password' => $request->password,
        ];
        $role          = new Role_User();
        $role->user_id = $user->id;
        $role->role_id = 3;
        $role->save();

        return redirect(route('admin.mitra.index'));
    }
}
