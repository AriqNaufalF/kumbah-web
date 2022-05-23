<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PackageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.packagelist', [
            'services' => Service::where('store_id', auth()->user()->store_id)
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex:/[0-9]/',
            'unit' => 'required',
        ]);

        $validated['store_id'] = auth()->user()->store_id;

        Service::create($validated);

        alert()->success("Success", "Service added successfully")->autoClose(3000);
        return redirect('/admin/package-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex:/[0-9]/',
            'unit' => 'required',
        ]);

        $validated['store_id'] = auth()->user()->store_id;

        Service::where('id', $id)
            ->update($validated);

        alert()->success("Success", "Service updated successfully")->autoClose(3000);
        return redirect('/admin/package-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);

        alert()->success("Success", "Service deleted successfully")->autoClose(3000);
        return redirect('/admin/package-list');
    }
}
