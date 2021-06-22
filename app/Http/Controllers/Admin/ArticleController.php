<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Job;
use App\Wish;
use App\Article;
use App\Location;
use App\Riwayat;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function index()
    {
        $post = Article::all();
        return view('admin.article.index', compact('post'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'ringkasan' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $namaFile = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img/artikel'), $namaFile);
        $post = Article::all();
        $post = Article::create([
            'judul' => $request->judul,
            'ringkasan' =>  $request->ringkasan,
            'content' =>  $request->content,
            'gambar' => $namaFile
        ]);

        return redirect()->route('admin.article.index'); 
    }

    public function destroy(Article $posts)
    {

        $posts->delete();

        return back();
    }

}
