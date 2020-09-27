@extends('back.layouts.master')
@section('title' , 'Albüm Kategorileri')
@section('content')

    <div class="content">
        <!-- Quick Overview -->
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-danger">{{$albums->count()}}</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-danger mb-0">
                           Toplam Kategori
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

       <div class="row">
           <div class="col-md-8">
               <!-- All Products -->
               <div class="block">
                   <div class="block-header block-header-default">
                       <h3 class="block-title">@yield('title')</h3>
                       <div class="block-options">
                           <div class="dropdown">
                               <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Filters <i class="fa fa-angle-down ml-1"></i>
                               </button>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                                   <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                       New
                                       <span class="badge badge-success badge-pill">260</span>
                                   </a>
                                   <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                       Out of Stock
                                       <span class="badge badge-danger badge-pill">24</span>
                                   </a>
                                   <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                       All
                                       <span class="badge badge-primary badge-pill">14503</span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="block-content">
                       <!-- Search Form -->
                       <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                           <div class="form-group">
                               <div class="input-group">
                                   <input type="text" class="form-control form-control-alt" id="one-ecom-products-search" name="one-ecom-products-search" placeholder="Search all products..">
                                   <div class="input-group-append">
                                <span class="input-group-text bg-body border-0">
                                    <i class="fa fa-search"></i>
                                </span>
                                   </div>
                               </div>
                           </div>
                       </form>
                       <!-- END Search Form -->

                       <!-- All Products Table -->
                       <div class="table-responsive">
                           <table class="table table-borderless table-striped table-vcenter">
                               <thead>
                               <tr>
                                   <th class="text-center" style="width: 100px;">ID</th>
                                   <th class="d-none d-md-table-cell">Kategori Adı</th>
                                   <th class="d-none d-sm-table-cell text-center">Resim sayısı</th>
                                   <th class="d-none d-sm-table-cell text-right">Oluşturulma Zamanı</th>
                                   <th class="text-center">Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($albums as $album)
                                   <tr>
                                       <td class="text-center font-size-sm">
                                          {{$album->id}}
                                       </td>
                                       <td class="d-none d-md-table-cell font-size-sm">
                                           {{$album->name}}
                                       </td>
                                       <td class="d-none d-sm-table-cell text-center font-size-sm">{{$album->getCountPhoto->count()}}</td>
                                       <td class="text-right d-none d-sm-table-cell font-size-sm">
                                           <strong>{{$album->created_at->diffForHumans()}}</strong>
                                       </td>
                                       <td class="text-center font-size-sm">
                                           <a class="btn btn-sm btn-alt-secondary" href="{{route('admin.album-category.edit' , $album->id)}}" data-toggle="tooltip" title="View">
                                               <i class="fa fa-fw fa-eye"></i>
                                           </a>
                                           <form action="{{route('admin.album-category.destroy' , $album->id)}}" method="post">
                                               @csrf
                                               @method('DELETE')
                                               <button class="btn btn-sm btn-alt-danger" type="submit" title="Delete">
                                                   <i class="fa fa-fw fa-times text-danger"></i>
                                               </button>
                                           </form>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                       <!-- END All Products Table -->

                       <!-- Pagination -->
                       <nav aria-label="Photos Search Navigation">
                           <ul class="pagination pagination-sm justify-content-end mt-2">
                               <li class="page-item">
                                   <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                       Prev
                                   </a>
                               </li>
                               <li class="page-item active">
                                   <a class="page-link" href="javascript:void(0)">1</a>
                               </li>
                               <li class="page-item">
                                   <a class="page-link" href="javascript:void(0)">2</a>
                               </li>
                               <li class="page-item">
                                   <a class="page-link" href="javascript:void(0)">3</a>
                               </li>
                               <li class="page-item">
                                   <a class="page-link" href="javascript:void(0)">4</a>
                               </li>
                               <li class="page-item">
                                   <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                       Next
                                   </a>
                               </li>
                           </ul>
                       </nav>
                       <!-- END Pagination -->
                   </div>
               </div>
               <!-- END All Products -->
           </div>
           <div class="col-md-4">
               <h4>Kategori Ekle</h4>
               <form action="{{route('admin.album-category.store')}}" method="post">
                   @csrf
                   <div class="form-group">
                       <label>
                           Kategori Adı
                       </label>
                       <input type="text" name="name" class="form-control" required style="width: 300px;">
                   </div>
                   <div class="form-group">
                       <button class="btn btn-success" type="submit" style="width: 300px;">Ekle</button>
                   </div>
               </form>
           </div>
       </div>
    </div>

@endsection
