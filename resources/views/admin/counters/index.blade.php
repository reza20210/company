@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_counter'))
        <div class="alert alert-danger">
            <div>{{ session('delete_counter') }}</div>
        </div>
    @endif
    @if(Session::has('add_counter'))
        <div class="alert alert-success">
            <div>{{ session('add_counter') }}</div>
        </div>
    @endif
    @if(Session::has('update_counter'))
        <div class="alert alert-success">
            <div>{{ session('update_counter') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست شمارنده ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>سال تجربه کاری</th>
            <th>مشتریان راضی</th>
            <th>محصول موفق</th>
            <th>ساعت کاری</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($counters as $counter)
            <tr>
                <td>{{ $counter->id }}</td>
                <td><a href="{{ route('counters.edit', $counter->id) }}">{{ $counter->workExperience }}</a></td>
                <td>{{ $counter->satisfiedCustomers }}</td>
                <td>{{ $counter->successfulProduct }}</td>
                <td>{{ $counter->hoursOfWork }}</td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($counter->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $counters->links() }}
    </div>
@endsection
