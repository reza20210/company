@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ایجاد مشتری جدید</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminCustomerController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('companyEmail', 'ایمیل شرکت: (اجباری)') }}
                {{ Form::text('companyEmail', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyTitle', 'عنوان (نام) شرکت: (اجباری)') }}
                {{ Form::text('companyTitle', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyLogoId', 'لوگوی شرکت: (اجباری)') }}
                {{ Form::file('companyLogoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentName', 'نام نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentName', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentRole', 'نقش نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentRole', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentEmail', 'ایمیل نماینده شرکت: (اجباری)') }}
                {{ Form::text('companyAgentEmail', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentPhotoId', 'عکس نماینده شرکت: (اجباری)') }}
                {{ Form::file('companyAgentPhotoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('companyAgentComment', 'توضیحات نماینده شرکت: (اجباری)') }}
                {{ Form::textarea('companyAgentComment', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
