<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    public function index()
    {
        return view('admin2.dashboard.index');
    }

    public function profil()
    {
        return view('admin2.profil.profil');
    }
}
