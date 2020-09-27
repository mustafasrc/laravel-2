@extends('back.layouts.master')
@section('title' ,'Ayarlar')
@section('content')
    <div class="content">
        <!-- Block Tabs -->
        <h2 class="content-heading">@yield('title')</h2>
        <div class="row">
            <div class="col-lg-12">
                <!-- Block Tabs Alternative Style -->
                <div class="block">
                    <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-alt-static-home">İletişim Bilgileri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-alt-static-profile">Ayarlar</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">



                        <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel">
                            <h4 class="font-w400">İletişim Bilgileri</h4>
                            <div class="row">
                                <div class="col-md-4 offset-md-1">
                                    <form action="{{route('admin.information.post' , $information->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Adress</label>
                                            <textarea name="adress" cols="15" rows="5" class="form-control">{{$information->adress}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon 1</label>
                                            <input type="text" name="telephone" class="form-control" value="{{$information->telephone}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon 2</label>
                                            <input type="text" name="telephone_2" class="form-control" value="{{$information->telephone_2}}">
                                        </div>
                                        <div class="form-group">
                                            <label>İframe(Harita)</label>
                                            <textarea name="iframe" cols="15" rows="5" class="form-control">{{$information->iframe}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success form-control">Güncelle</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    @if($information->iframe)
                                        {!! $information->iframe !!}
                                    @endif
                                </div>
                            </div>
                        </div>




                        <div class="tab-pane" id="btabs-alt-static-profile" role="tabpanel">
                            <h4 class="font-w400">Ayarlar</h4>
                            <div class="row">
                                <div class="col-md-4 offset-md-1">
                                    <form action="{{route('admin.config.post')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Site adı</label>
                                            <input type="text" name="name" class="form-control" value="{{$config->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Site Logosu</label>
                                            <input type="file" name="image" class="form-control">
                                            @if($config->image)
                                                <img src="{{$config->image}}" class="img-thumbnail img-fluid mt-3" style="width: 150px; height: 100px;">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>İnstagram</label>
                                            <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text" name="youtube" class="form-control" value="{{$config->youtube}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" class="form-control" value="{{$config->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" class="form-control" value="{{$config->facebook}}">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success form-control" type="submit">Güncelle</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block Tabs Alternative Style -->
            </div>
        </div>
        <!-- END Block Tabs -->


@endsection
