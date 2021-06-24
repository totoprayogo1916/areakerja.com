<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Job;
use App\Wish;
use App\Riwayat;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


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

    function get_client_ip($id) {
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

        $wish=Wish::where([['idJob',$id],['ip',$ipaddress]])->first();
        if(isset($wish))
        {

            $wish->delete();
            return back();
        }
        else
        {

        Wish::insert([
            'ip' => $ipaddress,
            'idJob' => $id,

        ]);
        // return redirect()->back()->with('message','Lowongan Telah Disimpan');
        // Alert::success('Lowongan Berhasil Disimpan');
        return back();
        }
        // echo ($ipaddress);
        // echo ('<br>');
        // echo ($id);
        // echo ('<br>');
    }

    function riwayat($id) {
        // $job = Job::where('id', $id)->first();
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

        $riwayat=Riwayat::where([['idJob',$id],['ip',$ipaddress]])->first();

        if(isset($riwayat))
        {
            return redirect()->route('jobs.show', ['job' => $id]);
        }
        else
        {
            Riwayat::insert([
                'ip' => $ipaddress,
                'idJob' => $id,
                'created_at' => Carbon::now(),
            ]);
        return redirect()->route('jobs.show', ['job' => $id]);
        }
    }
}
