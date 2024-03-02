<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreOptionalRequest;
use App\Http\Requests\UpdateOptionalRequest;
use App\Http\Controllers\Controller;
use App\Models\Optional;
use illuminate\Support\Str;
class OptionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $optionals = Optional::all();

        return view('admin.optionals.index', compact('optionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.optionals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOptionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOptionalRequest $request)
    {
        $form_data = $request->all();

        $optional = new Optional();

        $optional->fill($form_data);
        $optional->slug = Str::slug($form_data['name']);
        $optional->save();

        return redirect()->route('admin.optionals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function show(Optional $optional)
    {
        return view('admin.optionals.show', compact('optional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function edit(Optional $optional)
    {
        return view('admin.optionals.edit', compact('optional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOptionalRequest  $request
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOptionalRequest $request, Optional $optional)
    {
        $form_data = $request->all();

        $slug = Str::slug($optional->name . '-');
        
        $optional->fill($form_data);
        $form_data['slug']= $slug;


        $optional-> update($form_data);

        return redirect()->route('admin.optionals.index', $optional->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Optional $optional)
    {
        $optional->delete();

        return redirect()->route('admin.optionals.index');
    }
}
