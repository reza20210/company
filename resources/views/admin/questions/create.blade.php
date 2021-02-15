@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ایجاد سوال و پاسخ جدید</h3>
    <div class="row">
        <div class="col-md-9 offset-md-3">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminQuestionController@store']) !!}
            <div class="form-group">
                {{ Form::label('questionTitle', 'عنوان سوال: (اجباری)') }}
                {{ Form::text('questionTitle', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('answer', 'پاسخ سوال: (اجباری)') }}
                {{ Form::textarea('answer', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
