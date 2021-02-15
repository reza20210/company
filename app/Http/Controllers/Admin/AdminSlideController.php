<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideCreateRequest;
use App\Http\Requests\SlideEditRequest;
use App\Models\Photo;
use App\Models\Slide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::with('photo')->paginate(10);
        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlideCreateRequest $request)
    {
        $slide = new Slide();

        if ($file = $request->file('first_photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $slide->photo_id = $photo->id;
        }
        $slide->title = $request->input('title');
        $slide->description = $request->input('description');
        $slide->status = $request->input('status');
        $slide->save();

        Session::flash('add_slide', 'اسلاید جدید با موفقیت اضافه شد');
        return redirect('admin/slides');
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
        $slide = Slide::where('id', $id)->first();
        return view('admin.slides.edit', compact(['slide']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlideEditRequest $request, $id)
    {
        $slide = Slide::findOrFail($id);

        if ($file = $request->file('first_photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $slide->photo_id = $photo->id;
        }

        $slide->title = $request->input('title');
        $slide->description = $request->input('description');
        $slide->status = $request->input('status');
        $slide->save();

        Session::flash('update_slide', 'اسلاید جدید با موفقیت بروزرسانی شد');
        return redirect('/admin/slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $photo = null;
        if ($slide->photo_id) {
            $photo = Photo::findOrFail($slide->photo_id);
            unlink(public_path() . $slide->photo->path);
            $photo->delete();
        }
        $slide->delete();
        Session::flash('delete_slide', 'اسلاید با موفقیت حذف شد');
        return redirect('admin/slides');
    }
}
