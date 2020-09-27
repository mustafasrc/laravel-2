<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::orderByDesc('id')->get();
        return view('back.slider.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->name = $request->post('name');
        $slider->status = $request->post('status');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $slider->image = '/uploads/' . $imagename;
        }
        $slider->save();
        return redirect()->route('admin.slider.index');
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
        $slider = Slider::find($id);
        return view('back.slider.edit' ,['slider' => $slider]);
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
        $slider = Slider::find($id);
        $slider->name = $request->post('name');
        $slider->status = $request->post('status');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $slider->image = '/uploads/' . $imagename;
        }
        $slider->save();
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return  redirect()->route('admin.slider.index');
    }
}
