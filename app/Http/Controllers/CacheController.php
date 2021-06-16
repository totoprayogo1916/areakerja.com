<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Job;

class CacheController extends Controller
{
    function index($id){
        $barang = Job::where('id', $id)->first();
        $title = $barang->title;
        // dd($id);

        // echo Cache::set('item',"hello World");
        Cache::put('title', $title, 30);
        echo Cache::get('title');
    }
}
