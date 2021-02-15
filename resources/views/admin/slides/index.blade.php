@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_slide'))
        <div class="alert alert-danger">
            <div>{{ session('delete_slide') }}</div>
        </div>
    @endif
    @if(Session::has('add_slide'))
        <div class="alert alert-success">
            <div>{{ session('add_slide') }}</div>
        </div>
    @endif
    @if(Session::has('update_slide'))
        <div class="alert alert-success">
            <div>{{ session('update_slide') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست اسلاید ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th></th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>وضعیت</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slides as $slide)
            <tr>
                <td>
                    <img src="{{ $slide->photo ? $slide->photo->path : "http://www.placehold.it/400" }}"
                         class="img-fluid" width="80">
                </td>
                <td><a href="{{ route('slides.edit', $slide->id) }}">{{ $slide->title }}</a></td>
                <td>{{ \Illuminate\Support\Str::limit($slide->description, 50) }}</td>
                @if($slide->status == 0)
                    <td><span class="tag tag-pill tag-danger">غیر فعال</span></td>
                @else
                    <td><span class="tag tag-pill tag-success">فعال</span></td>
                @endif
                <td>{{ \Hekmatinasser\Verta\Verta::instance($slide->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $slides->links() }}
    </div>
@endsection
