<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;

class AdminCompanyController
{
    public function index()
    {
        return view('mitra.home');
    }
}
