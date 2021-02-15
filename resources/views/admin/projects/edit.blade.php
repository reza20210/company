@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ویرایش پروژه</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $project->photo ? $project->photo->path : "http://www.placehold.it/400" }}" class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($project ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminProjectController@update', $project->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', $project->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'نام مستعار: (اجباری)') }}
                {{ Form::text('slug', $project->slug, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('category', 'دسته بندی: (اجباری)') }}
                {{ Form::select('category', $categories, $project->category->id, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('user', 'کاربر: (اجباری)') }}
                {{ Form::select('user', $users, $project->user->id, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', $project->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('status', 'وضعیت: (اجباری)') }}
                {{ Form::select('status', [1 => 'فعال' , 0 => 'غیرفعال'] ,null , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('first_photo', 'تصویر اصلی:') }}
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
                {{ Form::textarea('meta_description', $project->meta_description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('meta_keywords', 'متا برچسب ها (اجباری)') }}
                {{ Form::textarea('meta_keywords', $project->meta_keywords, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminProjectController@destroy', $project->id]]) !!}
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
