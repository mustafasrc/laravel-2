@extends('front.layouts.master')
@section('content')
    <section class="content pt-3" style="padding-bottom: 480px;">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <img src="{{$product->image}}"class="img-fluid img-thumbnail">
              </div>
              <div class="col-md-6">
                 <div class="news p-3">
                     <div>
                         <h3>{{$product->name}}/<small style="font-size: 15px;">{{$product->getCategory->name}}</small> </h3>
                     </div>
                     <div class="mb-5">
                         {!! $product->content !!}
                     </div>
                     <hr>
                     <div class="price">
                         <h5>Fiyat</h5>
                         <i class="fa fa-money-bill"><span class="ml-3">{{$product->price}}</span></i>
                         <h5 class="mt-3">Stok Durumu</h5>
                         @if($product->stock > 0 )
                         <p class="text-success">Var</p>
                         @else
                             <p class="text-danger">Yok</p>
                         @endif
                     </div>
                 </div>
              </div>
          </div>
      </div>
    </section>
@endsection
