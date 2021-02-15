<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutCreateRequest;
use App\Http\Requests\AboutEditRequest;
use App\Models\About;
use App\Models\Photo;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAboutController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $abouts = About::paginate(10);
        return \response()->view('admin.abouts.index', compact(['abouts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return \response()->view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(AboutCreateRequest $request)
    {
        $about = new About();

        if ($file = $request->file('first_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->first_photo_id = $photo->id;
        }

        if ($file = $request->file('second_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->second_photo_id = $photo->id;
        }

        if ($file = $request->file('third_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->third_photo_id = $photo->id;
        }

        if ($file = $request->file('forth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->forth_photo_id = $photo->id;
        }

        if ($file = $request->file('fifth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->fifth_photo_id = $photo->id;
        }

        if ($file = $request->file('sixth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->sixth_photo_id = $photo->id;
        }

        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();

        Session::flash('add_about', 'درباره ما جدید با موفقیت اضافه شد');
        return redirect('admin/abouts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $about = About::findOrFail($id);
        return \response()->view('admin.abouts.edit', compact(['about']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(AboutEditRequest $request, $id)
    {
        $about = About::findOrFail($id);

        if ($file = $request->file('first_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->first_photo_id = $photo->id;
        }

        if ($file = $request->file('second_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->second_photo_id = $photo->id;
        }

        if ($file = $request->file('third_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->third_photo_id = $photo->id;
        }

        if ($file = $request->file('forth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->forth_photo_id = $photo->id;
        }

        if ($file = $request->file('fifth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->fifth_photo_id = $photo->id;
        }

        if ($file = $request->file('sixth_photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $about->sixth_photo_id = $photo->id;
        }

        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();

        Session::flash('update_about', 'درباره ما جدید با موفقیت بروزرسانی شد');
        return redirect('admin/abouts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $photo = null;
        if ($about->first_photo_id) {
            $photo = Photo::findOrFail($about->first_photo_id);
            unlink(public_path() . $about->first_photo->path);
            $photo->delete();
        }
        $photo = null;
        if ($about->second_photo_id) {
            $photo = Photo::findOrFail($about->second_photo_id);
            unlink(public_path() . $about->second_photo->path);
            $photo->delete();
        }
        $photo = null;
        if ($about->third_photo_id) {
            $photo = Photo::findOrFail($about->third_photo_id);
            unlink(public_path() . $about->third_photo->path);
            $photo->delete();
        }
        $photo = null;
        if ($about->forth_photo_id) {
            $photo = Photo::findOrFail($about->forth_photo_id);
            unlink(public_path() . $about->forth_photo->path);
            $photo->delete();
        }
        $photo = null;
        if ($about->fifth_photo_id) {
            $photo = Photo::findOrFail($about->fifth_photo_id);
            unlink(public_path() . $about->fifth_photo->path);
            $photo->delete();
        }
        $photo = null;
        if ($about->sixth_photo_id) {
            $photo = Photo::findOrFail($about->sixth_photo_id);
            unlink(public_path() . $about->sixth_photo->path);
            $photo->delete();
        }
        $about->delete();
        Session::flash('delete_about', 'درباره ما با موفقیت حذف شد');
        return redirect('admin/abouts');
    }
}
