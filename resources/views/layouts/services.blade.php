@foreach($services as  $service)
    <div class="col-sm-6 col-lg-4">
        <div class="services-item card-overlay active">
            <h3>
                <a href="{{ route('showService', $service->id) }}">{{ $service->title }}</a>
            </h3>
        </div>
    </div>
@endforeach
