<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Question;
use App\Models\Service;
use App\Models\Slide;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();
        $categoriesCount = Category::count();
        $photosCount = Photo::count();
        $usersCount = User::count();
        $slidesCount = Slide::count();
        $customersCount = Customer::count();
        $servicesCount = Service::count();
        $questionsCount = Question::count();
        $projects = Project::orderBy('created_at', 'desc')->limit(5)->get();
        $users = User::orderBy('created_at', 'desc')->limit(5)->get();
        return view('admin.dashboard.index', compact(['projectsCount', 'categoriesCount', 'photosCount', 'usersCount', 'projects', 'users', 'slidesCount', 'customersCount', 'servicesCount', 'questionsCount']));
    }
}
