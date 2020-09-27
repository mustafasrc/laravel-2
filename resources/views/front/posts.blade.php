@extends('front.layouts.master')
@section('content')

    <section class="content pt-3" style="padding-bottom: 220px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mt-3" style="width: 18rem;">
                        <div class="card-header" style="background-color: #d0d2d0">
                            <i class="fas fa-newspaper mr-1"></i><span>Kurumsal</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($corparatepages as $page)
                            <li class="list-group-item category-list"><a href="{{route('corparate' , $page->slug)}}" class="category-link">{{$page->name}}</a></li>
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
                <div class="col-md-9 mt-3">
                    <div class="news-title">
                        <h5 class="text-white">Bizden Haberler</h5>
                    </div>
                    <div class="news">
                        @foreach($posts as $post)
                        <div class="new">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('post', $post->slug)}}">
                                        <img src="{{$post->image}}" class="img-fluid img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <a href="{{route('post', $post->slug)}}" class="new-title"><h5>{{$post->name}}</h5></a>
                                    <p>{{$post->subject}}</p>
                                    <span class="float-right">{{$post->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
