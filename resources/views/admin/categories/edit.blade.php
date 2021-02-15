@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ویرایش دسته بندی</h3>
    <div class="row">
        <div class="col-md-9 offset-md-1">
            @include('partials.form-errors')
            {!! Form::model($category ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminCategoryController@update', $category->id]]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', $category->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', $category->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'نام مستعار: (اجباری)') }}
                {{ Form::text('slug', $category->slug, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('meta_description', 'متا توضیحات: (اجباری)') }}
                {{ Form::textarea('meta_description', $category->meta_description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('meta_keywords', 'متا برچسب ها (اجباری)') }}
                {{ Form::textarea('meta_keywords', $category->meta_keywords, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminCategoryController@destroy', $category->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
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
