@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_header'))
        <div class="alert alert-danger">
            <div>{{ session('delete_header') }}</div>
        </div>
    @endif
    @if(Session::has('add_header'))
        <div class="alert alert-success">
            <div>{{ session('add_header') }}</div>
        </div>
    @endif
    @if(Session::has('update_header'))
        <div class="alert alert-success">
            <div>{{ session('update_header') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست هدر ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>ایمیل</th>
            <th>شماره تلفن</th>
            <th>عنوان سایت</th>
            <th>آدرس شرکت</th>
            <th>توضیحات سایت</th>
            <th>لوگو سایت</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($headers as $header)
            <tr>
                <td>{{ $header->id }}</td>
                <td><a href="{{ route('headers.edit', $header->id) }}">{{ $header->email }}</a></td>
                <td>{{ $header->telephoneNumber }}</td>
                <td>{{ $header->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($header->address, 50) }}</td>
                <td>{{ \Illuminate\Support\Str::limit($header->description, 50) }}</td>
                <td>
                    <img
                        src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($header->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $headers->links() }}
    </div>
@endsection
