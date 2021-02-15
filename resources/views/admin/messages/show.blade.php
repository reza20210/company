@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2 text-center">نمایش پیام</h3>
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <div class="biography-area pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>نام</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <p>{{ $message->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="biography-area pb-70 m-t-2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6">
                            <h4>ایمیل</h4>
                        </div>

                        <div class="col-lg-6">
                            <div class="content">
                                <p>{{ $message->email }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="biography-area pb-70 m-t-2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6">
                            <h4>تلفن</h4>
                        </div>

                        <div class="col-lg-6">
                            <div class="content">
                                <p>{{ $message->telephone }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="biography-area pb-70 m-t-2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6">
                            <h4>عنوان</h4>
                        </div>

                        <div class="col-lg-6">
                            <div class="content">
                                <p>{{ $message->subject }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="biography-area pb-70 m-t-2 m-b-3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6">
                            <h4>متن پیام</h4>
                        </div>

                        <div class="col-lg-6">
                            <div class="content">
                                <p>{{ $message->message }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {!! Form::open(['method' => 'DELETE' ,'action' => ['\App\Http\Controllers\Admin\AdminMessageController@destroy', $message->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class' => 'btn btn-danger col-md-3']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
