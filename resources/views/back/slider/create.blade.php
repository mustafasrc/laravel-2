@extends('back.layouts.master')
@section('title' ,'Slider Ekle')
@section('content')
    <!-- Basic -->
   <div class="row">
       <div class="block mt-3 col-md-5 offset-md-3 ">
           <h2 class="p-3">Slider Ekle</h2>
           <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data" class="p-3">
               @csrf
               <div class="form-group">
                   <label>Slider Başlık</label>
                   <input type="text" name="name" class="form-control " required style="width: 500px;">
               </div>
               <div class="form-group">
                   <label>Slider Resim</label>
                   <input type="file" name="image" class="form-control dropzone form-control " required style="width: 500px;">
               </div>
               <div class="form-group">
                   <label>Slider Durum</label>
                   <select name="status" class="form-control" style="width: 500px;" required>
                       <option value="0">İnaktif</option>
                       <option value="1">Aktif</option>
                   </select>
               </div>
               <div class="form-group">
                   <button class="btn btn-success form-control" style="width: 500px;" type="submit">Ekle</button>
               </div>
           </form>
       </div>
   </div>
    <!-- END Basic -->
@endsection
