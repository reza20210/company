@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ویرایش شمارنده ها</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @include('partials.form-errors')
            {!! Form::model($counter ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminCounterController@update', $counter->id]]) !!}
            <div class="form-group">
                {{ Form::label('workExperience', 'سال تجربه کاری: (اجباری)') }}
                {{ Form::text('workExperience', $counter->workExperience, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('satisfiedCustomers', 'مشتریان راضی: (اجباری)') }}
                {{ Form::text('satisfiedCustomers', $counter->satisfiedCustomers, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('successfulProduct', 'محصول موفق: (اجباری)') }}
                {{ Form::text('successfulProduct', $counter->successfulProduct, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('hoursOfWork', 'ساعت کاری: (اجباری)') }}
                {{ Form::text('hoursOfWork', $counter->hoursOfWork, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminCounterController@destroy', $counter->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
