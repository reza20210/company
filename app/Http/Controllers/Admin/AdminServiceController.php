<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceEditRequest;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('photos')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        $service = new Service();
        $photoArr = [];
        if ($files = $request->file('photos')) {
            foreach ($files as $file) {
                $name = time() . $file->getClientOriginalName();

                // images dir creating in public dir
                $file->move('images', $name);

                $photo = new Photo();
                $photo->name = $file->getClientOriginalName();
                $photo->path = $name;
                $photo->user_id = Auth::id();
                $photo->save();
                $photoArr[] = $photo->id;
            }
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();
        $service->photos()->attach($photoArr);

        Session::flash('add_service', 'سرویس با موفقیت ایجاد شد');
        return redirect('admin/services');
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
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact(['service']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceEditRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $photoArr = [];
        if ($files = $request->file('photos')) {
            foreach ($files as $file) {
                $name = time() . $file->getClientOriginalName();

                // images dir creating in public dir
                $file->move('images', $name);

                $photo = new Photo();
                $photo->name = $file->getClientOriginalName();
                $photo->path = $name;
                $photo->user_id = Auth::id();
                $photo->save();
                $photoArr[] = $photo->id;
            }
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();

        $photo = null;
        if ($photoArr) {
            if ($service->photos) {
                foreach ($service->photos as $photo) {
                    unlink(public_path() . $photo->path);
                    $photo->delete();
                }
            }
            $service->photos()->sync($photoArr);
        }

        Session::flash('update_service', 'سرویس با موفقیت بروزرسانی شد');
        return redirect('admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $photo = null;
        if ($service->photos) {
            foreach ($service->photos as $photo) {
                unlink(public_path() . $photo->path);
                $photo->delete();
            }
        }
        $service->delete();
        Session::flash('delete_service', 'سرویس با موفقیت حذف شد');
        return redirect('admin/services');
    }
}
