<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    public function index()
    {
        return view('mitra.dashboard.index');
    }

    public function login()
    {
        return view('mitra.auth.login');
    }

    public function profil()
    {
        return view('mitra.profil.profil');
    }
}
