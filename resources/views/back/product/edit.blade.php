@extends('back.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('back')}}/assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/assets/js/plugins/dropzone/dist/min/dropzone.min.css">

@endsection
@section('title' , 'Ürün Düzenle')
@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview + Actions -->
        <div class="row">
            <div class="col-6 col-lg-4">
                <a class="block block-link-shadow text-center" href="be_pages_ecom_orders.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">250</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            Pending
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">29</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            Available
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-danger">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-danger mb-0">
                            Remove Product
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview + Actions -->

        <!-- Info -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">@yield('title')</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form action="{{route('admin.urunler.update' , $product->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="one-ecom-product-name">Ürün Adı</label>
                                <input type="text" class="form-control" id="one-ecom-product-name" name="name" value="{{$product->name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Ürün İçeriği</label>
                                <textarea id="js-ckeditor" name="content" required>{{$product->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="one-ecom-product-category">Kategori</label>
                                <select class="js-select2 form-control" id="one-ecom-product-category" name="categories" style="width: 100%;" data-placeholder="Choose one.." required>
                                    @foreach($categories as $category)

                                    <option @if($product->categories == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-price">Fiyat</label>
                                    <input type="text" class="form-control" id="one-ecom-product-price" name="price" value="{{$product->price}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Stok Miktari</label>
                                    <input type="text" class="form-control" id="one-ecom-product-stock" name="stock" value="{{$product->stock}}" required>
                                </div>
                            </div>
                            <div class="form group row">
                                <label for="one-ecom-product-stock">Ürün resim</label>
                                <input type="file" class="dropzone form-control" name="image">
                                <img src="{{$product->image}}" style="width: 400px; height: 300px;" class="img-fluid img-thumbnail mt-3">
                            </div>
                            <div class="form group row mt-3">
                                <div class="col-lg-12">
                                    <button  type="submit" class="btn btn-success form-control">Güncelle</button>
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

