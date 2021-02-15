@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ایجاد پروژه جدید</h3>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminProjectController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'نام مستعار: (اجباری)') }}
                {{ Form::text('slug', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('category', 'دسته بندی: (اجباری)') }}
                {{ Form::select('category', $categories, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('user', 'کاربر: (اجباری)') }}
                {{ Form::select('user', $users, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('status', 'وضعیت: (اجباری)') }}
                {{ Form::select('status', [1 => 'فعال' , 0 => 'غیرفعال'] ,0 , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('first_photo', 'تصویر اصلی: (اجباری)') }}
                {{ Form::file('first_photo', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('projectVideoId', 'ویدئو پروژه:') }}
                {{ Form::file('projectVideoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('projectVideoPosterId', ' پوستر ویدئو پروژه:') }}
                {{ Form::file('projectVideoPosterId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('meta_description', 'متا توضیحات: (اجباری)') }}
                {{ Form::textarea('meta_description', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('meta_keywords', 'متا برچسب ها (اجباری)') }}
                {{ Form::textarea('meta_keywords', null, ['class' => 'form-control']) }}
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
            $('#description').summernote({
                height: 300,                 // set editor height
                width: "90%",                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                dialogsInBody: true
            });
        });
    </script>
@endsection
