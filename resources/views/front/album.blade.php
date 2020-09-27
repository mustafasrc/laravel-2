@extends('front.layouts.master')
@section('content')
  <div class="content" style="padding-bottom: 600px;">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
                  <div class="row mt-5">
                      @foreach($photos as $photo)
                          <div class="product mt-2">
                              <div class="col-md-3">
                                  <div class="card" style="width: 15rem;">
                                      <img src="{{$photo->image}}" class="card-img-top img-thumbnail" alt="...">
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card mt-3" style="width: 18rem;">
                      <div class="card-header" style="background-color: #d0d2d0">
                          <i class="fas fa-newspaper mr-1"></i><span>Albümler</span>
                      </div>
                      <ul class="list-group list-group-flush">
                          @foreach($albums as $album)
                              <a href="{{route('album.category' , $album->slug)}}" class="category-link">
                                  <li class="list-group-item category-list">
                                      {{$album->name}}
                                  </li>
                              </a>
                          @endforeach

                      </ul>
                  </div>
                  <div class="card mt-3" style="width: 18rem;">
                      <div class="card-header" style="background: #d0d2d0" >
                          <i class="fas fa-newspaper mr-1"></i><span>İletişim Bilgileri</span>
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item category-list"><i class="fa fa-address-book"><span class="ml-2">{{$information->adress}}</span></i></li>
                          <li class="list-group-item category-list"><i class="fa fa-phone"><span class="ml-2">{{$information->telephone}}</span></i></li>
                          <li class="list-group-item category-list"><i class="fa fa-phone"><span class="ml-2">{{$information->telephone_2}}</span></i></li>
                      </ul>
                  </div>
              </div>
          </div>

      </div>
  </div>

@endsection
