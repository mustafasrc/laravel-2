@extends('front.layouts.master')
@section('content')
    <section class="content pt-3" style="padding-bottom:500px; ">
        <div class="container">
            <div class="page-title">
                <h3>{{$post->name}}</h3>
            </div>
            <div class="news" style="width: 100%!important; margin-left: 0!important;">
                <div class="img">
                    <img src="{{$post->image}}"  class="img-fluid" style="height: 500px; width: 100%;">
                </div>
                <div class="post mt-4">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
