@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ویرایش سوال و پاسخ</h3>
    <div class="row">
        <div class="col-md-9 offset-md-2">
            @include('partials.form-errors')
            {!! Form::model($question ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminQuestionController@update', $question->id]]) !!}
            <div class="form-group">
                {{ Form::label('questionTitle', 'عنوان سوال: (اجباری)') }}
                {{ Form::text('questionTitle', $question->questionTitle, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('answer', 'پاسخ سوال: (اجباری)') }}
                {{ Form::textarea('answer', $question->answer, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminQuestionController@destroy', $question->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
