@foreach($projects as $project)
    <div class="col-sm-6 col-lg-4">
        <div class="projects-item card-overlay">
            <img src="{{ $project->photo ? $project->photo->path : "http://www.placehold.it/900x300" }}"
                 alt="Projects">
            <div class="inner">
                <h3>
                    <a href="{{ route('showProject', $project->id) }}">{{ $project->category->title }}</a>
                </h3>
                <span>{{ $project->title }}</span>
            </div>
        </div>
    </div>
@endforeach
