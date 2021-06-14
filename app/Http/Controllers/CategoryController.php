<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;

class CategoryController extends Controller
{
    public function show(Category $category)
    {

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->whereHas('categories', function($query) use($category) {
                $query->whereId($category->id);
            })
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Category: '.$category->name;

        return view('jobs.index', compact(['jobs', 'banner', 'searchLocations', 'searchCategories', 'sidbarJobs']));
    }
}
