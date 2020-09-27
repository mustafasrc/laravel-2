@extends('back.layouts.master')
@section('title' , 'Haberler')
@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-link-shadow text-center" href="{{route('admin.posts.create')}}">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-success">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-success mb-0">
                            Yeni Haber Ekle
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-danger">
                           {{$posts->where('status' , '=' , 0)->count()}}
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-danger mb-0">
                            Yayında Olmayan
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-success">
                            {{$posts->where('status' , '>' , 0)->count()}}
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-success mb-0">
                            Yayında Olan
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">{{$posts->count()}}</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            Toplam Haber
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

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
                <!-- END Search Form -->

                <!-- All Products Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th class="d-none d-md-table-cell">Haber Adı</th>
                            <th class="d-none d-md-table-cell">Haber Resmi</th>
                            <th class="d-none d-sm-table-cell text-center">Oluşturulma Zamanı</th>
                            <th>Durumu</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$post->id}}
                            </td>
                            <td class="d-none d-md-table-cell font-size-sm">
                                <strong>{{$post->name}}</strong>
                            </td>
                            <td class="d-none d-md-table-cell font-size-sm">
                                <img src="{{$post->image}}" style="width: 300px; height: 190px;">
                            </td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">{{$post->created_at->diffForHumans()}}</td>
                            <td>
                                @if($post->status > 0)
                                <span class="badge badge-success">Aktif</span>
                                @else
                                <span class="badge badge-danger">İnaktif</span>
                                @endif
                            </td>
                            <td class="text-center font-size-sm">
                                <a class="btn btn-sm btn-alt-secondary" href="{{route('admin.posts.edit' , $post->id)}}" data-toggle="tooltip" title="View">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <form action="{{route('admin.posts.destroy' , $post->id)}}" method="post">
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
    <!-- END Page Content -->

@endsection
