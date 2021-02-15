@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ایجاد درباره ما جدید</h3>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminAboutController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('first_photo_id', 'تصویر اول: (اجباری)') }}
                {{ Form::file('first_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('second_photo_id', 'تصویر دوم: (اجباری)') }}
                {{ Form::file('second_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('third_photo_id', 'تصویر سوم: (اجباری)') }}
                {{ Form::file('third_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('forth_photo_id', 'تصویر چهارم: (اجباری)') }}
                {{ Form::file('forth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('fifth_photo_id', 'تصویر پنجم: (اجباری)') }}
                {{ Form::file('fifth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('sixth_photo_id', 'تصویر ششم: (اجباری)') }}
                {{ Form::file('sixth_photo_id', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
