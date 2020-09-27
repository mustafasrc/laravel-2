@extends('back.layouts.master')
@section('title' ,'Slider Düzenle')
@section('content')
    <!-- Basic -->
    <div class="block mt-3">
     <h2 class="p-3">Slider Ekle</h2>
        <form action="{{route('admin.slider.update' , $slider->id)}}" method="post" enctype="multipart/form-data" class="p-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Slider Başlık</label>
                <input type="text" name="name" class="form-control " required style="width: 500px;" value="{{$slider->name}}">
            </div>
            <div class="form-group">
                <label>Slider Resim</label>
                <input type="file" name="image" class="form-control dropzone form-control " style="width: 500px;">
                <img src="{{$slider->image}}"  class="img-fluid img-thumb mt-3" style="width: 300px;">
            </div>
            <div class="form-group">
                <label>Slider Durum</label>
                <select name="status" class="form-control" style="width: 500px;" required>
                    <option @if($slider->status == 0) selected @endif value="0">İnaktif</option>
                    <option @if($slider->status == 1) selected @endif value="1">Aktif</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success form-control" style="width: 500px;" type="submit">Ekle</button>
            </div>
        </form>
    </div>
    <!-- END Basic -->
@endsection
