<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderCreateRequest;
use App\Http\Requests\HeaderEditRequest;
use App\Models\Header;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::paginate(10);
        return view('admin.headers.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.headers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderCreateRequest $request)
    {
        $header = new Header();
        if ($file = $request->file('siteLogoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteLogoId = $photo->id;
        }

        if ($file = $request->file('siteVideoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteVideoId = $photo->id;
        }

        if ($file = $request->file('siteVideoPosterId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteVideoPosterId = $photo->id;
        }

        $header->email = $request->input('email');
        $header->telephoneNumber = $request->input('telephoneNumber');
        $header->title = $request->input('title');
        $header->address = $request->input('address');
        $header->description = $request->input('description');
        $header->workTime = $request->input('workTime');
        $header->telegram = $request->input('telegram');
        $header->instagram = $request->input('instagram');
        $header->youtube = $request->input('youtube');
        $header->twitter = $request->input('twitter');
        $header->facebook = $request->input('facebook');
        $header->save();

        Session::flash('add_header', 'هدر جدید با موفقیت اضافه شد');
        return redirect('admin/headers');
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
        $header = Header::findOrFail($id);
        return view('admin.headers.edit', compact(['header']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeaderEditRequest $request, $id)
    {
        $header = Header::findOrFail($id);

        if ($file = $request->file('siteLogoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteLogoId = $photo->id;
        }

        if ($file = $request->file('siteVideoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteVideoId = $photo->id;
        }

        if ($file = $request->file('siteVideoPosterId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $header->siteVideoPosterId = $photo->id;
        }

        $header->email = $request->input('email');
        $header->telephoneNumber = $request->input('telephoneNumber');
        $header->title = $request->input('title');
        $header->address = $request->input('address');
        $header->description = $request->input('description');
        $header->workTime = $request->input('workTime');
        $header->telegram = $request->input('telegram');
        $header->instagram = $request->input('instagram');
        $header->youtube = $request->input('youtube');
        $header->twitter = $request->input('twitter');
        $header->facebook = $request->input('facebook');
        $header->save();

        Session::flash('update_header', 'هدر با موفقیت بروزرسانی شد');
        return redirect('admin/headers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::findOrFail($id);
        $photo = null;
        if ($header->siteLogoId) {
            $photo = Photo::findOrFail($header->siteLogoId);
            unlink(public_path() . $header->siteLogo->path);
            $photo->delete();
        }

        if ($header->siteVideoId) {
            $photo = Photo::findOrFail($header->siteVideoId);
            unlink(public_path() . $header->siteVideo->path);
            $photo->delete();
        }

        if ($header->siteVideoPosterId) {
            $photo = Photo::findOrFail($header->siteVideoPosterId);
            unlink(public_path() . $header->siteVideoPoster->path);
            $photo->delete();
        }

        $header->delete();
        Session::flash('delete_header', 'هدر با موفقیت حذف شد');
        return redirect('admin/headers');
    }
}
