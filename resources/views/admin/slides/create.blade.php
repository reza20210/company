@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ایجاد اسلاید جدید</h3>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminSlideController@store', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
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
                {{ Form::label('first_photo', 'تصویر اسلاید: (اجباری)') }}
                {{ Form::file('first_photo', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
