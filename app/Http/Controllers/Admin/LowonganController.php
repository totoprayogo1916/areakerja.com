<?php

namespace App\Http\Controllers\Admin;

use App\Lowongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLocationRequest;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class LowonganController extends Controller
{

    public function index(){

        $lowongan = Lowongan::all();

        return view('admin.lowongan.index', compact('lowongan'));
    }

    public function show(Lowongan $lowongan)
    {

        $lowongan->load('lowongan');

        return view('admin.lowongan.show', compact('lowongan'));
    }

}
