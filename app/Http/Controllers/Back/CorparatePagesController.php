<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corparatepages;
use Illuminate\Support\Str;
use App\Models\Servicespage;

class CorparatePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['servicespages'] = Servicespage::orderByDesc('id')->get();
        $data['corparatepages'] = Corparatepages::orderByDesc('id')->get();
        return view('back.corparate-pages.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.corparate-pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $corparatepages = new Corparatepages;
        $corparatepages->name = $request->post('name');
        $corparatepages->slug = Str::slug($request->post('name'));
        $corparatepages->content = $request->post('content');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $corparatepages->image = '/uploads/' . $imagename;
        }
        $corparatepages->save();
        return redirect()->route('admin.pages.index');
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
        $corparatepage = Corparatepages::find($id);
        return view('back.corparate-pages.edit' , ['corparatepage' => $corparatepage]);
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
        $corparatepages =  Corparatepages::find($id);
        $corparatepages->name = $request->post('name');
        $corparatepages->slug = Str::slug($request->post('name'));
        $corparatepages->content = $request->post('content');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $corparatepages->image = '/uploads/' . $imagename;
        }
        $corparatepages->save();
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Corparatepages::destroy($id);
        return redirect()->route('admin.pages.index');
    }
}
