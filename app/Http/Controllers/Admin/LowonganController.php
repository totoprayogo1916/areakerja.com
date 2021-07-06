<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLowonganRequest;
use App\Lowongan;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LowonganController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();

        return view('admin.lowongan.index', compact('lowongan'));
    }

    public function show(Lowongan $lowongan)
    {
        return view('admin.lowongan.show', compact('lowongan'));
    }

    public function pembayaran(Lowongan $lowongan)
    {
        return view('admin.lowongan.pembayaran', compact('lowongan'));
    }

    public function destroy(Lowongan $lowongan)
    {
        $lowongan->delete();

        return back();
    }

    public function massDestroy(MassDestroyLowonganRequest $request)
    {
        Lowongan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
