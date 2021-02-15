@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">ایجاد شمارنده های جدید</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @include('partials.form-errors')
            {!! Form::open(['action' => '\App\Http\Controllers\Admin\AdminCounterController@store']) !!}
            <div class="form-group">
                {{ Form::label('workExperience', 'سال تجربه کاری: (اجباری)') }}
                {{ Form::text('workExperience', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('satisfiedCustomers', 'مشتریان راضی: (اجباری)') }}
                {{ Form::text('satisfiedCustomers', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('successfulProduct', 'محصول موفق: (اجباری)') }}
                {{ Form::text('successfulProduct', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('hoursOfWork', 'ساعت کاری: (اجباری)') }}
                {{ Form::text('hoursOfWork', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
