@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center"> ویرایش مشتری : {{ $customer->companyAgentName }} </h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $customer->companyLogoId ? $customer->companyLogo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img
                src="{{ $customer->companyAgentPhotoId ? $customer->companyAgentPhoto->path : "http://www.placehold.it/400" }}"
                class="img-fluid m-t-3">
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($customer ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminCustomerController@update', $customer->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('companyEmail', 'ایمیل شرکت: (اجباری)') }}
                {{ Form::text('companyEmail', $customer->companyEmail, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyTitle', 'عنوان (نام) شرکت: (اجباری)') }}
                {{ Form::text('companyTitle', $customer->companyTitle, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyLogoId', 'لوگوی شرکت:') }}
                {{ Form::file('companyLogoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentName', 'نام نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentName', $customer->companyAgentName, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentRole', 'نقش نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentRole', $customer->companyAgentRole, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentEmail', 'ایمیل نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentEmail', $customer->companyAgentEmail, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentPhotoId', 'عکس نماینده شرکت:') }}
                {{ Form::file('companyAgentPhotoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentComment', 'توضیحات نماینده شرکت: (اجباری)') }}
                {{ Form::textarea('companyAgentComment', $customer->companyAgentComment, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminCustomerController@destroy', $customer->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
