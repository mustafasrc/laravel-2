@extends('back.layouts.master')
@section('title' ,'Slider Arşiv')
@section('content')
    <div class="content">
        <!-- Image Default -->
        <h2 class="content-heading">@yield('title')</h2>
        <div class="row items-push">
            @foreach($sliders as $slider)
            <div class="col-md-4 animated fadeIn">
                <div class="options-container">
                    <img class="img-fluid options-item" src="{{$slider->image}}" alt="" style="height: 280px; width: 100%">
                    <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                            <h3 class="h4 text-white mb-2">{{$slider->name}}</h3>
                            <a class="btn btn-sm btn-light" href="{{route('admin.slider.edit' , $slider->id)}}">
                                <i class="fa fa-pencil-alt text-primary mr-1"></i> Edit
                            </a>
                            <form action="{{route('admin.slider.destroy' , $slider->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-light mt-2" type="submit">
                                    <i class="fa fa-times text-danger mr-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
@endsection
