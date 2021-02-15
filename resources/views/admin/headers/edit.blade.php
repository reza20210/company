@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ویرایش هدر</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($header ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminHeaderController@update', $header->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('email', 'ایمیل: (اجباری)') }}
                {{ Form::text('email', $header->email, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('telephoneNumber', 'شماره تلفن: (اجباری)') }}
                {{ Form::text('telephoneNumber', $header->telephoneNumber, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title', 'عنوان سایت: (اجباری)') }}
                {{ Form::text('title', $header->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address', 'آدرس شرکت: (اجباری)') }}
                {{ Form::text('address', $header->address, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات فوتر: (اجباری)') }}
                {{ Form::textarea('description', $header->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteLogoId', 'لوگو سایت:') }}
                {{ Form::file('siteLogoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteVideoId', 'ویدئو سایت:') }}
                {{ Form::file('siteVideoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteVideoPosterId', ' پوستر ویدئو سایت:') }}
                {{ Form::file('siteVideoPosterId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('workTime', 'روزها و ساعات کاری: (اجباری)') }}
                {{ Form::text('workTime', $header->workTime, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('telegram', 'کانال تلگرام: (اجباری)') }}
                {{ Form::text('telegram', $header->telegram, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('instagram', 'صفحه اینستاگرام: (اجباری)') }}
                {{ Form::text('instagram', $header->instagram, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('youtube', 'کانال یوتیوب: (اجباری)') }}
                {{ Form::text('youtube', $header->youtube, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('twitter', 'صفحه توییتر: (اجباری)') }}
                {{ Form::text('twitter', $header->twitter, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('facebook', 'صفحه فیسبوک: (اجباری)') }}
                {{ Form::text('facebook', $header->facebook, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminHeaderController@destroy', $header->id]]) !!}
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
