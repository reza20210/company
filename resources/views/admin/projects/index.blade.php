@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_project'))
        <div class="alert alert-danger">
            <div>{{ session('delete_project') }}</div>
        </div>
    @endif
    @if(Session::has('add_project'))
        <div class="alert alert-success">
            <div>{{ session('add_project') }}</div>
        </div>
    @endif
    @if(Session::has('update_project'))
        <div class="alert alert-success">
            <div>{{ session('update_project') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست پروژه ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th></th>
            <th>عنوان</th>
            <th>کاربر</th>
            <th>توضیحات</th>
            <th>دسته بندی</th>
            <th>وضعیت</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>
                    <img src="{{ $project->photo ? $project->photo->path : "http://www.placehold.it/400" }}"
                         class="img-fluid" width="80">
                </td>
                <td><a href="{{ route('projects.edit', $project->id) }}">{{ $project->title }}</a></td>
                <td>{{ $project->user->name }}</td>
                <td>{!! Str::limit($project->description, 50) !!}</td>
                <td>{{ $project->category->title }}</td>
                @if($project->status == 0)
                    <td><span class="tag tag-pill tag-danger">غیر فعال</span></td>
                @else
                    <td><span class="tag tag-pill tag-success">فعال</span></td>
                @endif
                <td>{{ Verta::instance($project->category->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $projects->links() }}
    </div>
@endsection
