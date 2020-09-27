@extends('back.layouts.master')
@section('title' , 'Kategoriler')
@section('content')

    <div class="content">

       <div class="row">
           <div class="col-md-12">
               <h4>Kategori Düzenle</h4>
               <form action="{{route('admin.kategori.update' ,$category->id)}}" method="post">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label>
                           Kategori Adı
                       </label>
                       <input type="text" name="name" class="form-control" required style="width: 300px;" value="{{$category->name}}">
                   </div>
                   <div class="form-group">
                       <label>Gösterilme Durumu</label>
                       <select name="status" class="form-control" required style="width: 300px;">
                           <option @if($category->status == 0) selected @endif value="0">Pasif</option>
                           <option @if($category->status == 1) selected @endif value="1">Aktif</option>
                       </select>
                   </div>
                   <div class="form-group">
                       <button class="btn btn-success" type="submit" style="width: 300px;">Düzenle</button>
                   </div>
               </form>
           </div>

       </div>
    </div>

@endsection
