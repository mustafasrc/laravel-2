@extends('back.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('back')}}/assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/assets/js/plugins/dropzone/dist/min/dropzone.min.css">

@endsection
@section('title' , 'Haber Ekle')
@section('content')

    <!-- Page Content -->
    <div class="content">

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">@yield('title')</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form action="{{route('admin.posts.store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="one-ecom-product-name">Haber Adı</label>
                                <input type="text" class="form-control" id="one-ecom-product-name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Haber Kısa Açıklama</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Haber İçeriği</label>
                                <textarea id="js-ckeditor" name="content" required></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Durum</label>
                                    <select name="status" class="form-control" required>
                                        <option value="0">İnaktif</option>,
                                        <option value="1">Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form group row">
                                <label for="one-ecom-product-stock">Haber resim</label>
                                <input type="file" class="dropzone form-control" name="image" required>
                            </div>
                            <div class="form group row mt-3">
                                <div class="col-lg-12">
                                    <button  type="submit" class="btn btn-success form-control">Ekle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

        <!-- Media -->
        <!-- END Media -->
    </div>
    <!-- END Page Content -->

@endsection
@section('js')

    <script src="{{asset('back')}}/assets/js/oneui.app.min.js"></script>
    <script src="{{asset('back')}}/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{asset('back')}}/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="{{asset('back')}}/assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{asset('back')}}/assets/js/plugins/dropzone/dropzone.min.js"></script>
    <script>jQuery(function(){ One.helpers(['select2', 'maxlength', 'ckeditor']); });</script>
@endsection

