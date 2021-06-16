<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Job;

class CacheController extends Controller
{
    function index($id){
        $job = Job::where('id', $id)->first();
        $title = $job->title;
        $name = $job->company->name;
        // dd($id);

        // echo Cache::set('item',"hello World");
        Cache::put('title', $title, 30);
        Cache::put('name', $name, 30);
        // echo Cache::get('title');
        // echo ('<br>');
        // echo Cache::get('name');
        return redirect('aboutus');
    }
}
