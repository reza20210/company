<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Question;
use App\Models\Service;
use App\Models\Slide;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
