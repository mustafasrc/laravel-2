<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\İnformation;

class ConfigController extends Controller
{
    public function index() {
        $information = İnformation::first();
        $config = Config::first();
        return view('back.config' , ['information' => $information , 'config' => $config]);
    }
    public function informationPost( Request $request) {
        $information = İnformation::first();
        $information->adress = $request->post('adress');
        $information->telephone = $request->post('telephone');
        $information->telephone_2 = $request->post('telephone_2');
        $information->iframe = $request->post('iframe');
        $information->save();
        return redirect()->route('admin.config');
    }
    public function configPost (Request $request) {
        $congif = Config::first();
        $congif->name = $request->post('name');
        $congif->instagram = $request->post('instagram');
        $congif->twitter = $request->post('twitter');
        $congif->youtube = $request->post('youtube');
        $congif->facebook = $request->post('facebook');
        if ($request->hasFile('image')) {
            $imagename = Str::slug($request->post('name')). '.' . $request->image ->getClientOriginalExtension();
            $request->image -> move(public_path('uploads') , $imagename);
            $congif->image = '/uploads/' . $imagename;
        }
        $congif->save();
        return redirect()->route('admin.config');
    }
}
