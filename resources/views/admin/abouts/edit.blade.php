@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ویرایش درباره ما</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $about->first_photo_id ? $about->first_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img src="{{ $about->second_photo_id ? $about->second_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img src="{{ $about->third_photo_id ? $about->third_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img src="{{ $about->forth_photo_id ? $about->forth_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img src="{{ $about->fifth_photo_id ? $about->fifth_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
            <img src="{{ $about->sixth_photo_id ? $about->sixth_photo->path : "http://www.placehold.it/400" }}"
                 class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($about ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminAboutController@update', $about->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', $about->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', $about->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('first_photo_id', 'تصویر اول:') }}
                {{ Form::file('first_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('second_photo_id', 'تصویر دوم:') }}
                {{ Form::file('second_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('third_photo_id', 'تصویر سوم:') }}
                {{ Form::file('third_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('forth_photo_id', 'تصویر چهارم:') }}
                {{ Form::file('forth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('fifth_photo_id', 'تصویر پنجم:') }}
                {{ Form::file('fifth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('sixth_photo_id', 'تصویر ششم:') }}
                {{ Form::file('sixth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminAboutController@destroy', $about->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
