<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Job;
use App\Wish;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMail2;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
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

        $wishlist=Wish::where('ip', $ipaddress)->get();
        
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidbarJobs = Job::whereTopRated(true)
        ->orderBy('id', 'desc')
        ->get();

        return view('index', compact(['wishlist','ipaddress','searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidbarJobs']));
    }

    public function search(Request $request)
    {

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

        $wishlist=Wish::where('ip', $ipaddress)->get();

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Search results';

        return view('jobs.index', compact(['wishlist','ipaddress','jobs', 'banner', 'searchLocations','sidbarJobs', 'searchCategories']));
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function kontakform(Request $request)
    {
        dd($request);
        // return view('user.kontak');
    }

    public function formpasang(Request $request)
    {
        dd($request);
        // return view('user.kontak');
    }

    public function kirimmail(Request $request)
    {
        $nama = $request->nama;
        $nomor = $request->nomor;
        $email1 = $request->email;
        $saran = $request->saran;
        $email = "ti.fadelirsyad04@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail($nama,$nomor,$email1,$saran));

        if($kirim){
            echo "Email telah dikirim";
        }

        return view('user.kontak');
    }

    public function lamarmail($name,$umur)
    {
        // $request = [$name,];
        // dd($name,$umur);
        // $nama = $request->nama;
        // $nomor = $request->nomor;
        // $email1 = $request->email;
        // $saran = $request->saran;
        $email = "ti.fadelirsyad04@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail2($umur));

        if($kirim){
            echo "Email telah dikirim";
        }

        return view('user.kontak');
    }

    public function addcart(Request $request)
    {   
        $id=$request->id; $time=60*24*14; 
        echo $id;
        $value=0;
        if( Cookie::get('cart')!==null ){
            $anonim=Cookie::get('cart');
            DB::table("cart")->insert(["anonim"=>$anonim,"product_id"=>$id]);
            return 0;
        }else{
            $value=DB::table("cart")->max("anonim")+1;
            if(empty($value)){
                $value=0;
            }
            DB::table("cart")->insert(["anonim"=>$value,"product_id"=>$id]);
            $cookie = cookie('cart', $value, $time);
            return response()->cookie($cookie);
        }

    }
    // function getMAcAddressExec()
    // {
    //     echo getMAcAddressExec();
    //         return substr(exec('getmac'), 0, 17); 
    // }   
    
    
    // function getMAcAddressShellExec()
    // {
    //     echo getMAcAddressShellExec();
    //     return substr(shell_exec('getmac'), 159,20); 
    // }
    
}
