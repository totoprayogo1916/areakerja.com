<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminCompanyController
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
