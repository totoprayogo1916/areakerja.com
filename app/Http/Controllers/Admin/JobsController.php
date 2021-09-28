<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Job;
use App\Location;
use App\Lowonganmitra;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        return view('admin.jobs.create', compact('companies', 'locations', 'categories'));
    }

    public function store(StoreJobRequest $request)
    {
        // $job->categories()->sync($request->input('categories', []));
        // $casts = ['jobs' => '    ']
        // $data = json_encode($request->requirements);
        // $arr = $request->all();
        // $arr = serialize($data);
        // $create = Job::create(['session'=>$arr]);
        $companyName      = Company::where('id', $request->company_id)->first('name');
        $slug_title       = Str::slug($request->get('title'));
        $slug_companyname = Str::slug($companyName->name);
        $slug             = $slug_title . '-di-' . $slug_companyname;
        // dd($request);
        $job = Job::create([
            'title'            => $request->title,
            'salary'           => $request->salary,
            'address'          => $request->address,
            'top_rated'        => $request->top_rated,
            'company_id'       => $request->company_id,
            'job_nature'       => $request->job_nature,
            'pendidikan'       => $request->pendidikan,
            'umur'             => $request->umur,
            'gender'           => $request->gender,
            'lokasikerja'      => $request->lokasikerja,
            'requirements'     => $request->requirements,
            'bataslamaran'     => $request->bataslamaran,
            'location_id'      => $request->location_id,
            'email'            => $request->email,
            'notelp'           => $request->notelp,
            'website'          => $request->website,
            'full_description' => $request->full_description,
            'slug'             => $slug,
        ]);
        $job->categories()->sync($request->input('categories', []));

        // $mitra = Lowonganmitra::where('id', $request['id'])->first();
        // if ($mitra != null) {
        //     $cek = Lowonganmitra::where('status_pemasangan', "Terpasang")->first();
        //     $mitra->status_pemasangan = $cek->status_pemasangan;
        //     $mitra->update();
        //     dd($mitra);
        // } else {
        //     echo 'gagal';
        // }
        // return request('requirements');
        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        // dd($job);
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.jobs.edit', compact('companies', 'locations', 'categories', 'job'));
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->all());
        $job->categories()->sync($request->input('categories', []));

        return redirect()->route('admin.jobs.index');
    }

    public function show(Job $job)
    {
        $job->load('company', 'location', 'categories');

        return view('admin.jobs.show', compact('job'));
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobRequest $request)
    {
        Job::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
