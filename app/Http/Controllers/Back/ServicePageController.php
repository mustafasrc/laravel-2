<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicespage;
use Illuminate\Support\Str;
class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.services-pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicespage = new Servicespage;
        $servicespage->name = $request->post('name');
        $servicespage->slug = Str::slug($request->post('name'));
        $servicespage->content = $request->post('content');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $servicespage->image = '/uploads/' . $imagename;
        }
        $servicespage->save();
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
        $servicespage = Servicespage::find($id);
        return view('back.services-pages.edit' , ['servicespage' => $servicespage]);
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
        $servicespage = Servicespage::find($id);
        $servicespage->name = $request->post('name');
        $servicespage->slug = Str::slug($request->post('name'));
        $servicespage->content = $request->post('content');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $servicespage->image = '/uploads/' . $imagename;
        }
        $servicespage->save();
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
        Servicespage::destroy($id);
        return  redirect()->route('admin.pages.index');
    }
}
