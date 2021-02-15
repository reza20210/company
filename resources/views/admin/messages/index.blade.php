@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_message'))
        <div class="alert alert-danger">
            <div>{{ session('delete_message') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست پیام ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>شماره تلفن</th>
            <th>موضوع</th>
            <th>متن پیغام</th>
            <th>تاریخ دریافت</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <td><a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}</a></td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->telephone }}</td>
                <td>{!! Str::limit($message->subject, 20) !!}</td>
                <td>{!! Str::limit($message->message, 50) !!}</td>
                <td>{{ Verta::instance($message->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $messages->links() }}
    </div>
@endsection
