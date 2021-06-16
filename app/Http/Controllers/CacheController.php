<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    function index($id){
        // dd($id);
        // echo Cache::set('item',"hello World");
        // Cache::put('item', $id, 30);
        echo Cache::get('item');
    }
}
