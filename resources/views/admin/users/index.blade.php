@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_user'))
        <div class="alert alert-danger">
            <div>{{ session('delete_user') }}</div>
        </div>
    @endif
    @if(Session::has('add_user'))
        <div class="alert alert-success">
            <div>{{ session('add_user') }}</div>
        </div>
    @endif
    @if(Session::has('update_user'))
        <div class="alert alert-success">
            <div>{{ session('update_user') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست کاربران</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>تصویر</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>وضعیت</th>
            <th>بیوگرافی</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <img src="{{ $user->photo ? $user->photo->path : "http://www.placehold.it/400" }}"
                         class="img-fluid" width="80">
                </td>
                @if($user->name != "admin")
                    <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                @else
                    <td>{{ $user->name }}</td>
                @endif
                <td>{{ $user->email }}</td>
                <td>
                    <ul style="list-style: none">
                        @foreach($user->roles as $role)
                            <div>{{ $role->name }}</div>
                        @endforeach
                    </ul>
                </td>
                @if($user->status == 0)
                    <td><span class="tag tag-pill tag-danger">غیر فعال</span></td>
                @else
                    <td><span class="tag tag-pill tag-success">فعال</span></td>
                @endif
                <td>{!! Str::limit($user->bio, 50) !!}</td>
                <td>{{ Verta::instance($user->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $users->links() }}
    </div>
@endsection
