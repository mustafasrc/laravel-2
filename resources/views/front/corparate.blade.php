@extends('front.layouts.master')
@section('content')
    <section class="content pt-3 " style="padding-bottom: 380px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title">
                        <h5>{{$page->name}}</h5>
                    </div>
                    <div class="paragrapy">
                            {!!$page->content!!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-3" style="width: 18rem;">
                        <div class="card-header" style="background-color: #d0d2d0;">
                            <i class="fas fa-newspaper mr-1"></i><span>Kurumsal</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($corparatepages as $page)
                                <a href="{{route('corparate' , $page->slug)}}" class="category-link">
                                     <li class="list-group-item category-list">
                                            {{$page->name}}
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
    </section>
@endsection
