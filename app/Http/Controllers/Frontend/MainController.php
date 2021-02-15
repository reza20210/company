<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Counter;
use App\Models\Customer;
use App\Models\Header;
use App\Models\Message;
use App\Models\Project;
use App\Models\Question;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')
            ->limit(6)
            ->where('status', 1)
            ->get();
        $projects = Project::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(6)->get();
        $slides = Slide::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->get();
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $customers = Customer::orderBy('created_at', 'desc')->limit(15)->get();
        $services = Category::orderBy('created_at', 'desc')->limit(6)->get();
        $counter = Counter::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.index', compact(['projects', 'users', 'slides', 'header', 'customers', 'services', 'counter', 'about']));
    }

    public function showAllProjects()
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $categories = Category::all();
        $projects = Project::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('frontend.projects', compact(['projects', 'categories', 'header']));
    }

    public function showAllUsers()
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $users = User::with('roles')
            ->where('status', 1)
            ->paginate(6);
        $about = About::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.team', compact(['header', 'users', 'about']));
    }

    public function showUser($id)
    {
        $user = User::findOrFail($id);
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.team-details', compact(['user', 'header', 'about']));
    }

    public function showAbout()
    {
        $counter = Counter::orderBy('created_at', 'desc')->get()->first();
        $users = User::with('roles')->paginate(3);
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.about', compact(['about', 'header', 'users', 'counter']));
    }

    public function testimonials()
    {
        $customers = Customer::paginate(3);
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.testimonials', compact(['about', 'header', 'customers']));
    }

    public function questions()
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        $questions = Question::orderBy('created_at', 'asc')->limit(5)->get();
        return view('frontend.questions', compact(['header', 'questions', 'about']));
    }

    public function services()
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        $services = Category::paginate(6);
        return view('frontend.services', compact(['header', 'services', 'about']));
    }

    public function showService($id)
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $about = About::orderBy('created_at', 'desc')->get()->first();
        $service = Category::findOrFail($id);
        return view('frontend.service-details', compact(['header', 'service', 'about']));
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.project-details', compact(['header', 'project']));
    }

    public function contact()
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        return view('frontend.contact', compact(['header']));
    }

    public function messageStore(Request $request)
    {
        // validate the request parameters
        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'msg_subject' => 'required',
                'message' => 'required',
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'msg' => 'fail',
                'data' => 'مشکلی در سرور پیش آمده است. لطفا بعدا تلاش کنید.',
            ]);
        }

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->telephone = $request->input('phone_number');
        $message->subject = $request->input('msg_subject');
        $message->message = $request->input('message');
        $message->save();

        return response()->json(['msg' => 'success', 'data' => [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone_number'),
            'subject' => $request->input('msg_subject'),
            'message' => $request->input('message')
        ]]);
    }

    public function searchProject(Request $request)
    {
        $header = Header::orderBy('created_at', 'desc')->get()->first();
        $categories = Category::all();
        $query = $request->get('title');
        $projects = Project::with('user', 'category', 'photo')
            ->where('title', 'like', "%" . $query . "%")
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('frontend.search_result', compact(['projects', 'categories', 'header', 'query']));
    }
}
