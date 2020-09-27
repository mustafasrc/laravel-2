@extends('back.layouts.master')
@section('title' , 'Kategoriler')
@section('content')

    <div class="content">

       <div class="row">
           <div class="col-md-12">
               <h4>Kategori Düzenle</h4>
               <form action="{{route('admin.album-category.update' ,$album->id)}}" method="post">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label>
                           Kategori Adı
                       </label>
                       <input type="text" name="name" class="form-control" required style="width: 300px;" value="{{$album->name}}">
                   </div>
                   <div class="form-group">
                       <button class="btn btn-success" type="submit" style="width: 300px;">Düzenle</button>
                   </div>
               </form>
           </div>

       </div>
    </div>

@endsection
