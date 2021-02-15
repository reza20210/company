@extends('admin.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <h3 class="p-b-2 text-center">ویرایش سرویس</h3>
    <div class="row">
        <div class="col-md-3">
            @foreach($service->photos as $photo)
                <img src="{{ $photo ? $photo->path : "http://www.placehold.it/400" }}"
                     class="img-fluid" width="80">
            @endforeach
        </div>
        <div class="col-md-9">
            @include('partials.form-errors')
            {!! Form::model($service ,['method' => 'PATCH' ,'action' => ['\App\Http\Controllers\Admin\AdminServiceController@update', $service->id], 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'عنوان: (اجباری)') }}
                {{ Form::text('title', $service->title, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'توضیحات: (اجباری)') }}
                {{ Form::textarea('description', $service->description, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('photos', 'تصاویر:') }}
                {{ Form::file('photos[]', ['multiple' => 'multiple', 'class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-success col-md-3']); !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminServiceController@destroy', $service->id]]) !!}
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
