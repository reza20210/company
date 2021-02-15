@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_service'))
        <div class="alert alert-danger">
            <div>{{ session('delete_service') }}</div>
        </div>
    @endif
    @if(Session::has('add_service'))
        <div class="alert alert-success">
            <div>{{ session('add_service') }}</div>
        </div>
    @endif
    @if(Session::has('update_service'))
        <div class="alert alert-success">
            <div>{{ session('update_service') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست خدمات</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>تصاویر</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td><a href="{{ route('services.edit', $service->id) }}">{{ $service->title }}</a></td>
                <td>{!! Str::limit($service->description, 50) !!}</td>
                <td>
                    @foreach($service->photos as $photo)
                        <img src="{{ $photo ? $photo->path : "http://www.placehold.it/400" }}"
                             class="img-fluid" width="80">
                    @endforeach
                </td>
                <td>{{ Verta::instance($service->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $services->links() }}
    </div>
@endsection
