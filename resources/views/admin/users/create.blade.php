@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ایجاد کاربر جدید</h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminUserController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('name', 'نام و نام خانوادگی: (اجباری)') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('bio', 'بیوگرافی (رزومه - اجباری):') }}
                {{ Form::textarea('bio', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'ایمیل: (اجباری)') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('roles', 'نقش: (اجباری)') }}
                {{ Form::select('roles[]', $roles, null, ['multiple' => 'multiple','class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('status', 'وضعیت: (اجباری)') }}
                {{ Form::select('status', [1 => 'فعال' , 0 => 'غیرفعال'] ,0 , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'رمز عبور: (اجباری)') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('avatar', 'تصویر پروفایل: (اجباری)') }}
                {{ Form::file('avatar', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#bio').summernote({
                height: 300,                 // set editor height
                width: "90%",                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                dialogsInBody: true
            });
        });
    </script>
@endsection
