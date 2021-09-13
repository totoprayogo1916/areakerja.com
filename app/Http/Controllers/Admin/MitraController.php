<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMitraRequest;
use App\Mitra;
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
}
