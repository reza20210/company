<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CounterRequest;
use App\Models\Counter;
use Illuminate\Support\Facades\Session;

class AdminCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::paginate(10);
        return view('admin.counters.index', compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounterRequest $request)
    {
        $counter = new Counter();
        $counter->workExperience = $request->input('workExperience');
        $counter->satisfiedCustomers = $request->input('satisfiedCustomers');
        $counter->successfulProduct = $request->input('successfulProduct');
        $counter->hoursOfWork = $request->input('hoursOfWork');
        $counter->save();

        Session::flash('add_counter', 'شمارنده های جدید با موفقیت اضافه شدند');
        return redirect('admin/counters');
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
        $counter = Counter::findOrFail($id);
        return view('admin.counters.edit', compact(['counter']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CounterRequest $request, $id)
    {
        $counter = Counter::findOrFail($id);
        $counter->workExperience = $request->input('workExperience');
        $counter->satisfiedCustomers = $request->input('satisfiedCustomers');
        $counter->successfulProduct = $request->input('successfulProduct');
        $counter->hoursOfWork = $request->input('hoursOfWork');
        $counter->save();

        Session::flash('update_counter', 'شمارنده های جدید با موفقیت بروزرسانی شدند');
        return redirect('admin/counters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counter = Counter::findOrFail($id);
        $counter->delete();
        Session::flash('delete_counter', 'شمارند ها با موفقیت حذف شدند');
        return redirect('admin/counters');
    }
}
