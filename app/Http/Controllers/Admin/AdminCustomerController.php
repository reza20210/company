<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerEditRequest;
use App\Models\Customer;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with('companyLogo', 'companyAgentPhoto')->paginate(10);
        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerCreateRequest $request)
    {
        $customer = new Customer();

        if ($file = $request->file('companyLogoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $customer->companyLogoId = $photo->id;
        }

        if ($file = $request->file('companyAgentPhotoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $customer->companyAgentPhotoId = $photo->id;
        }

        $customer->companyEmail = $request->input('companyEmail');
        $customer->companyTitle = $request->input('companyTitle');
        $customer->companyAgentName = $request->input('companyAgentName');
        $customer->companyAgentRole = $request->input('companyAgentRole');
        $customer->companyAgentEmail = $request->input('companyAgentEmail');
        $customer->companyAgentComment = $request->input('companyAgentComment');
        $customer->save();

        Session::flash('add_customer', 'مشتری جدید با موفقیت اضافه شد');
        return redirect('admin/customers');
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
        $customer = Customer::with('companyLogo', 'companyAgentPhoto')->where('id', $id)->first();
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerEditRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);

        if ($file = $request->file('companyLogoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $customer->companyLogoId = $photo->id;
        }

        if ($file = $request->file('companyAgentPhotoId')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = Auth::id();
            $photo->save();

            $customer->companyAgentPhotoId = $photo->id;
        }

        $customer->companyEmail = $request->input('companyEmail');
        $customer->companyTitle = $request->input('companyTitle');
        $customer->companyAgentName = $request->input('companyAgentName');
        $customer->companyAgentRole = $request->input('companyAgentRole');
        $customer->companyAgentEmail = $request->input('companyAgentEmail');
        $customer->companyAgentComment = $request->input('companyAgentComment');
        $customer->save();

        Session::flash('update_customer', 'مشتری جدید با موفقیت بروزرسانی شد');
        return redirect('/admin/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $photo = null;
        if ($customer->companyLogoId) {
            $photo = Photo::findOrFail($customer->companyLogoId);
            unlink(public_path() . $customer->companyLogo->path);
            $photo->delete();
        }
        if ($customer->companyAgentPhotoId) {
            $photo = Photo::findOrFail($customer->companyAgentPhotoId);
            unlink(public_path() . $customer->companyAgentPhoto->path);
            $photo->delete();
        }
        $customer->delete();
        Session::flash('delete_customer', 'مشتری با موفقیت حذف شد');
        return redirect('admin/customers');
    }
}
