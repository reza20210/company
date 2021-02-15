<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectCreateRequest;
use App\Http\Requests\ProjectEditRequest;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('photo', 'category', 'user')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.projects.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCreateRequest $request)
    {
        $project = new Project();

        if ($file = $request->file('first_photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->photo_id = $photo->id;
        }

        if ($file = $request->file('projectVideoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->projectVideoId = $photo->id;
        }

        if ($file = $request->file('projectVideoPosterId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->projectVideoPosterId = $photo->id;
        }

        $project->title = $request->input('title');
        $project->slug = $request->input('slug');
        $project->description = $request->input('description');
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('user');
        $project->meta_description = $request->input('meta_description');
        $project->meta_keywords = $request->input('meta_keywords');
        $project->status = $request->input('status');
        $project->save();

        Session::flash('add_project', 'پروژه جدید با موفقیت اضافه شد');
        return redirect('admin/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('category')->where('id', $id)->first();
        $categories = Category::pluck('title', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.projects.edit', compact(['project', 'categories', 'users']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectEditRequest $request, $id)
    {
        $project = Project::findOrFail($id);

        if ($file = $request->file('first_photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->photo_id = $photo->id;
        }

        if ($file = $request->file('projectVideoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->projectVideoId = $photo->id;
        }

        if ($file = $request->file('projectVideoPosterId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = $request->input('user');
            $photo->save();

            $project->projectVideoPosterId = $photo->id;
        }

        $project->title = $request->input('title');
        $project->slug = $request->input('slug');
        $project->description = $request->input('description');
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('user');
        $project->meta_description = $request->input('meta_description');
        $project->meta_keywords = $request->input('meta_keywords');
        $project->status = $request->input('status');
        $project->save();

        Session::flash('update_project', 'پروژه جدید با موفقیت بروزرسانی شد');
        return redirect('/admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $photo = null;
        if ($project->photo_id) {
            $photo = Photo::findOrFail($project->photo_id);
            unlink(public_path() . $project->photo->path);
            $photo->delete();
        }
        if ($project->projectVideoId) {
            $photo = Photo::findOrFail($project->projectVideoId);
            unlink(public_path() . $project->projectVideo->path);
            $photo->delete();
        }
        if ($project->projectVideoPosterId) {
            $photo = Photo::findOrFail($project->projectVideoPosterId);
            unlink(public_path() . $project->projectVideoPoster->path);
            $photo->delete();
        }
        $project->delete();
        Session::flash('delete_project', 'پروژه با موفقیت حذف شد');
        return redirect('admin/projects');
    }
}
