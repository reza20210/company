@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_question'))
        <div class="alert alert-danger">
            <div>{{ session('delete_question') }}</div>
        </div>
    @endif
    @if(Session::has('add_question'))
        <div class="alert alert-success">
            <div>{{ session('add_question') }}</div>
        </div>
    @endif
    @if(Session::has('update_question'))
        <div class="alert alert-success">
            <div>{{ session('update_question') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست سوالات متداول</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>عنوان سوال</th>
            <th>پاسخ</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td><a href="{{ route('questions.edit', $question->id) }}">{{ $question->questionTitle }}</a></td>
                <td>{{ \Illuminate\Support\Str::limit($question->answer, 50) }}</td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($question->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $questions->links() }}
    </div>
@endsection
