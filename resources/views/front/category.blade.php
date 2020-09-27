@extends('front.layouts.master')
@section('content')
  <div class="content" style="padding-bottom: 400px;">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
                  <div class="row mt-5">
                      @foreach($products as $product)
                          <div class="product mt-2">
                              <div class="col-md-3">
                                  <div class="card" style="width: 15rem;">
                                      <img src="{{$product->image}}" class="card-img-top img-thumbnail" alt="...">
                                      <div class="card-body">
                                          <h5 class="card-title text-center">{{$product->name}}</h5>
                                          <a href="{{route('product' ,[ $product->getCategory->slug , $product->slug])}}" class="btn btn-primary research">İncele</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card mt-3" style="width: 18rem;">
                      <div class="card-header" style="background-color: #d0d2d0">
                          <i class="fas fa-newspaper mr-1"></i><span>Ürün Kategorileri/Ürün Grupları</span>
                      </div>
                      <ul class="list-group list-group-flush">
                          @foreach($productcategories as $productcategory)
                              <a href="{{route('category' , $productcategory->slug)}}" class="category-link">
                                  @if($productcategory->getCount->count() > 0 )
                                      <li class="list-group-item category-list">
                                          {{$productcategory->name}} <span class="float-right">({{$productcategory->getCount()->count()}})</span>
                                      </li>
                                  @endif
                              </a>
                          @endforeach

                      </ul>
                  </div>
              </div>
          </div>

      </div>
  </div>

@endsection
