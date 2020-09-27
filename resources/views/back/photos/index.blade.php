@extends('back.layouts.master')
@section('title' , 'Fotoğraflar')
@section('content')

   <div class="row">
       <div class="col-md-8">
           <div class="content content-boxed">
               <div class="row">
                   <!-- Story -->
                   <div class="row items-push">
                       @foreach($photos as $photo)
                       <div class="col-md-4 animated fadeIn">
                           <div class="options-container">
                               <img class="img-fluid options-item" src="{{$photo->image}}" style="width: 100%; height: 300px;">
                               <div class="options-overlay bg-black-75">
                                   <div class="options-overlay-content">
                                       <h3 class="h4 text-white mb-2">{{$photo->getPhotos->name}}</h3>
                                       <form action="{{route('admin.photos.destroy' , $photo->id)}}" method="post">
                                           @csrf
                                           @method('DELETE')
                                           <button class="btn btn-sm btn-light" type="submit">
                                               <i class="fa fa-times text-danger mr-1"></i> Delete
                                           </button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach
                   </div>
                   <!-- END Story -->
               </div>

               <!-- Pagination -->
               <nav aria-label="Page navigation">
                   <ul class="pagination justify-content-center push">
                       <li class="page-item active">
                           <a class="page-link" href="javascript:void(0)">1</a>
                       </li>
                       <li class="page-item">
                           <a class="page-link" href="javascript:void(0)">2</a>
                       </li>
                       <li class="page-item">
                           <a class="page-link" href="javascript:void(0)">3</a>
                       </li>
                       <li class="page-item">
                           <a class="page-link" href="javascript:void(0)">4</a>
                       </li>
                       <li class="page-item">
                           <a class="page-link" href="javascript:void(0)">5</a>
                       </li>
                       <li class="page-item">
                           <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                               <span class="sr-only">Next</span>
                           </a>
                       </li>
                   </ul>
               </nav>
               <!-- END Pagination -->
           </div>
       </div>
       <div class="col-md-4">
           <h3 class="mt-3">Resim Ekle</h3>
           <form  method="post"  enctype="multipart/form-data" action="{{route('admin.photos.store')}}">
               @csrf
                <div class="form-group">
                    <label>Resim</label>
                    <input type="file" class="dropzone form-control" required name="image" style="width: 300px;">
                </div>
               <div class="form-group">
                   <select name="category" class="form-control"required style="width: 300px;">
                       @foreach($categories as $category)
                       <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                   </select>
               </div>
               <div class="form group">
                   <button class="form-control btn btn-success" style="width: 300px;">Ekle</button>
               </div>
           </form>
       </div>
   </div>
@endsection
