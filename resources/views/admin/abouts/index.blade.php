@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_about'))
        <div class="alert alert-danger">
            <div>{{ session('delete_about') }}</div>
        </div>
    @endif
    @if(Session::has('add_about'))
        <div class="alert alert-success">
            <div>{{ session('add_about') }}</div>
        </div>
    @endif
    @if(Session::has('update_about'))
        <div class="alert alert-success">
            <div>{{ session('update_about') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">درباره ما</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>تصویر اول</th>
            <th>تصویر دوم</th>
            <th>تصویر سوم</th>
            <th>تصویر چهارم</th>
            <th>تصویر پنجم</th>
            <th>تصویر ششم</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td><a href="{{ route('abouts.edit', $about->id) }}">{{ $about->title }}</a></td>
                <td>{{ \Illuminate\Support\Str::limit($about->description, 50) }}</td>
                <td>
                    <img
                        src="{{ $about->first_photo_id ? $about->first_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $about->second_photo_id ? $about->second_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $about->third_photo_id ? $about->third_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $about->forth_photo_id ? $about->forth_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $about->fifth_photo_id ? $about->fifth_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $about->sixth_photo_id ? $about->sixth_photo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($about->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $abouts->links() }}
    </div>
@endsection
