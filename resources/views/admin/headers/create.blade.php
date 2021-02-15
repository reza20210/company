@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ایجاد هدر جدید</h3>
    <div class="row">
        <div class="col-md-9 offset-md-3">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminHeaderController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('email', 'ایمیل: (اجباری)') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('telephoneNumber', 'شماره تلفن: (اجباری)') }}
                {{ Form::text('telephoneNumber', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title', 'عنوان سایت: (اجباری)') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address', 'آدرس شرکت: (اجباری)') }}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات فوتر: (اجباری)') }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteLogoId', 'لوگو سایت: (اجباری)') }}
                {{ Form::file('siteLogoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteVideoId', 'ویدئو سایت: (اجباری)') }}
                {{ Form::file('siteVideoId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('siteVideoPosterId', ' پوستر ویدئو سایت: (اجباری)') }}
                {{ Form::file('siteVideoPosterId', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('workTime', 'روزها و ساعات کاری: (اجباری)') }}
                {{ Form::text('workTime', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('telegram', 'کانال تلگرام: (اجباری)') }}
                {{ Form::text('telegram', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('instagram', 'صفحه اینستاگرام: (اجباری)') }}
                {{ Form::text('instagram', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('youtube', 'کانال یوتیوب: (اجباری)') }}
                {{ Form::text('youtube', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('twitter', 'صفحه توییتر: (اجباری)') }}
                {{ Form::text('twitter', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('facebook', 'صفحه فیسبوک: (اجباری)') }}
                {{ Form::text('facebook', null, ['class' => 'form-control']) }}
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
