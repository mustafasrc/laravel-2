<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
Use App\Models\ProductCategories;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderByDesc('id')->get();
        return view('back.product.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = ProductCategories::where('status' , 1)->get();
        return view('back.product.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->post('name');
        $product->slug = Str::slug($request->post('name'));
        $product->content = $request->post('content');
        $product->price =  $request->post('price');
        $product->stock = $request->post('stock');
        $product->categories = $request->post('categories');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $product->image = '/uploads/' . $imagename;
        }
        $product->save();
        return redirect()->route('admin.urunler.index');
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
        $product = Product::find($id);
        $data['categories'] = ProductCategories::where('status' , 1)->get();
        return view('back.product.edit', $data,['product' => $product]);
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
        $product = Product::find($id);
        $product->name = $request->post('name');
        $product->slug = Str::slug($request->post('name'));
        $product->content = $request->post('content');
        $product->price =  $request->post('price');
        $product->stock = $request->post('stock');
        $product->categories = $request->post('categories');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $product->image = '/uploads/' . $imagename;
        }
        $product->save();
        return redirect()->route('admin.urunler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.urunler.index');
    }
}
