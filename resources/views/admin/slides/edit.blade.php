@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ویرایش اسلاید</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $slide->photo ? $slide->photo->path : "http://www.placehold.it/400" }}" class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($slide ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminSlideController@update', $slide->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', $slide->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', $slide->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('status', 'وضعیت: (اجباری)') }}
                {{ Form::select('status', [1 => 'فعال' , 0 => 'غیرفعال'] ,null , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('first_photo', 'تصویر اسلاید:') }}
                {{ Form::file('first_photo', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminSlideController@destroy', $slide->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
