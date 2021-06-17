<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Job;
use RealRashid\SweetAlert\Facades\Alert;

class CacheController extends Controller
{
    function index($id){
        $job = Job::where('id', $id)->first();
        $title = $job->title;
        $name = $job->company->name;
        // dd($id);

        // echo Cache::set('item',"hello World");
        Cache::add('title', $title,  now()->addMinutes(10));
        Cache::add('name', $name,  now()->addMinutes(10));

        alert()->warning($name,$title);

        // echo Cache::get('title');
        // echo ('<br>');
        // echo Cache::get('name');
        return redirect('pasang');
    }

    function get(){
        // $job = Job::where('id', $id)->first();
        // $title = $job->title;
        // $name = $job->company->name;
        // // dd($id);

        // // echo Cache::set('item',"hello World");
        // Cache::add('title', $title,  now()->addMinutes(10));
        // Cache::add('name', $name,  now()->addMinutes(10));

        // alert()->warning($name,$title);

        echo Cache::get('title');
        echo ('<br>');
        echo Cache::get('name');
        // return redirect('pasang');
    }

    function get_client_ip() {
        $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;

        dd($ipaddress);
    }
}
