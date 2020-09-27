@extends('front.layouts.master')
@section('content')
    <section class="content pb-3">
        <div class="container">
            <div class="row">
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
                <div class="col-md-9">
                    <div id="carouselExampleCaptions" class="carousel slide mt-3 ml-3" data-ride="carousel" style="height: 374px; width: 98%!important;">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                            <div class="carousel-item active">
                                <img src="{{$slider->image}}" class="d-block w-100 img-fluid" alt="..." style="height: 374px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
            <div class="row mt-5">
                @foreach($products as $product)
                   <div class="product mt-4">
                      <div class="col-md-3">
                          <div class="card" style="width: 16rem;">
                              <img src="{{$product->image}}" class="card-img-top img-thumbnail" alt="...">
                              <div class="card-body">
                                  <h6 class="card-title text-center">{{$product->name}}</h6>
                                  <a href="{{route('product' ,[ $product->getCategory->slug , $product->slug])}}" class="btn btn-primary research">İncele</a>
                              </div>
                          </div>
                      </div>
                   </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <a href="" class="all-product">
                        <i class="fas fa-shopping-basket mr-2"></i>Tüm Ürünler
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
