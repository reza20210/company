@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-primary">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $projectsCount }}</h4>
                    <p>پروژه ها</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $categoriesCount }}</h4>
                    <p>دسته بندی ها</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-warning">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $photosCount }}</h4>
                    <p>رسانه ها</p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-danger">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $usersCount }}</h4>
                    <p>کاربران</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-primary">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $slidesCount }}</h4>
                    <p>اسلاید ها</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $customersCount }}</h4>
                    <p>مشتریان</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-warning">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $servicesCount }}</h4>
                    <p>خدمات</p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-danger">
                <div class="card-block p-b-0">
                    <h4 class="m-b-0">{{ $questionsCount }}</h4>
                    <p>سوالات متداول</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

    </div>
    <div class="row">
        <div class="col-md-6">
            <h6 class="p-b-2">آخرین پروژه ها</h6>
            <table class="table table-hover bg-content">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td><a href="{{ route('projects.edit', $project->id) }}">{{ $project->title }}</a></td>
                        <td>{{ $project->category->title }}</td>
                        <td>{{ \Hekmatinasser\Verta\Verta::instance($project->category->created_at) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h6 class="p-b-2">لیست کاربران</h6>
            <table class="table table-hover bg-content">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email   }}</td>
                        <td>{{ \Hekmatinasser\Verta\Verta::instance($user->created_at) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
