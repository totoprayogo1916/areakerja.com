<div class="col-lg-4 sidebar">
    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Jobs by Location</h4>
        <ul class="cat-list">
            @foreach($sidebarLocations as $location)
                <li><a class="justify-content-between d-flex" href="{{ route('locations.show', $location->id) }}"><p>{{ $location->name }}</p><span>{{ $location->jobs_count }}</span></a></li>
            @endforeach
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Top rated job posts</h4>
        <ul class="cat-list">
            @foreach($sidebarJobs as $job)
            <li> <a class="justify-content-between d-flex" href="{{ route('jobs.show', $job->id) }}"><p>{{ $job->title }}</p>
                </a></li>
            @endforeach
            </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Jobs by Category</h4>
        <ul class="cat-list">
            @foreach($sidebarCategories as $category)
                <li><a class="justify-content-between d-flex" href="{{ route('categories.show', $category->id)}}"><p>{{ $category->name }}</p><span>{{ $category->jobs_count }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
