@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_customer'))
        <div class="alert alert-danger">
            <div>{{ session('delete_customer') }}</div>
        </div>
    @endif
    @if(Session::has('add_customer'))
        <div class="alert alert-success">
            <div>{{ session('add_customer') }}</div>
        </div>
    @endif
    @if(Session::has('update_customer'))
        <div class="alert alert-success">
            <div>{{ session('update_customer') }}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست مشتریان</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>لوگوی شرکت</th>
            <th>عکس نماینده شرکت</th>
            <th>نام شرکت</th>
            <th>نام نماینده شرکت</th>
            <th>مسئولیت (نقش) نماینده شرکت</th>
            <th>ایمیل شرکت</th>
            <th>ایمیل نماینده شرکت</th>
            <th>توضیحات نماینده شرکت</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>
                    <img
                        src="{{ $customer->companyLogoId ? $customer->companyLogo->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td>
                    <img
                        src="{{ $customer->companyAgentPhotoId ? $customer->companyAgentPhoto->path : "http://www.placehold.it/400" }}"
                        class="img-fluid" width="80">
                </td>
                <td><a href="{{ route('customers.edit', $customer->id) }}">{{ $customer->companyTitle }}</a></td>
                <td>{{ $customer->companyAgentName }}</td>
                <td>{{ $customer->companyAgentRole }}</td>
                <td>{{ $customer->companyEmail }}</td>
                <td>{{ $customer->companyAgentEmail }}</td>
                <td>{{ \Illuminate\Support\Str::limit($customer->companyAgentComment, 50) }}</td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($customer->created_at) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12 text-md-center">
        {{ $customers->links() }}
    </div>
@endsection
