@extends('back.layouts.master')

@section('content')
@section('title' , 'Kurumsal Ve Hizmetler Sayfası')

    <!-- END Hero -->

    <!-- Page Content -->
    <!-- Bootstrap Tabs (data-toggle="tabs" is initialized in Helpers.coreBootstrapTabs()) -->
    <div class="content">
        <!-- Block Tabs -->
        <h2 class="content-heading">@yield('title')</h2>
        <div class="row">
            <div class="col-lg-12">
                <!-- Block Tabs Default Style -->
                <div class="block">
                    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-static-home">Kurumsal Sayfalar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-static-profile">Hizmetler Sayfalar</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">


                        <div class="tab-pane active" id="btabs-static-home" role="tabpanel">
                            <h4 class="font-w400">Kurumsal Sayfalar</h4>
                            <div class="col-6 col-lg-3">
                                <a class="block block-link-shadow text-center" href="{{route('admin.pages.create')}}">
                                    <div class="block-content block-content-full">
                                        <div class="font-size-h2 text-success">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="block-content py-2 bg-body-light">
                                        <p class="font-w600 font-size-sm text-success mb-0">
                                            Yeni Kurumsal Sayfa Ekle
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">ID</th>
                                        <th class="d-none d-md-table-cell">Sayfa Adı</th>
                                        <th class="d-none d-sm-table-cell text-center">Sayfa Resim</th>
                                        <th class="d-none d-sm-table-cell text-right">Oluşturulma Zamanı</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($corparatepages as $corparatepage)
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                {{$corparatepage->id}}
                                            </td>
                                            <td class="d-none d-md-table-cell font-size-sm">
                                                {{$corparatepage->name}}
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                                <img src="{{$corparatepage->image}}" style="width: 300px; height: 200px;" class="img-thumbnail img-fluid">
                                            </td>
                                            <td class="text-right d-none d-sm-table-cell font-size-sm">
                                                <strong>{{$corparatepage->created_at->diffForHumans()}}</strong>
                                            </td>
                                            <td class="text-center font-size-sm">
                                                <a class="btn btn-sm btn-alt-secondary" href="{{route('admin.pages.edit' , $corparatepage->id)}}" data-toggle="tooltip" title="View">
                                                    <i class="fa fa-fw fa-eye"></i>
                                                </a>
                                                <form action="{{route('admin.pages.destroy' , $corparatepage->id)}}" method="post">
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
                        </div>





                        <div class="tab-pane" id="btabs-static-profile" role="tabpanel">
                            <h4 class="font-w400">Hizmetler Sayfası</h4>
                            <div class="tab-pane active" id="btabs-static-home" role="tabpanel">
                                <div class="col-6 col-lg-3">
                                    <a class="block block-link-shadow text-center" href="{{route('admin.services-pages.create')}}">
                                        <div class="block-content block-content-full">
                                            <div class="font-size-h2 text-success">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <div class="block-content py-2 bg-body-light">
                                            <p class="font-w600 font-size-sm text-success mb-0">
                                                Yeni Hizmetler Sayfası Ekle
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;">ID</th>
                                            <th class="d-none d-md-table-cell">Sayfa Adı</th>
                                            <th class="d-none d-sm-table-cell text-center">Sayfa Resim</th>
                                            <th class="d-none d-sm-table-cell text-right">Oluşturulma Zamanı</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($servicespages as $servicespage)
                                            <tr>
                                                <td class="text-center font-size-sm">
                                                    {{$servicespage->id}}
                                                </td>
                                                <td class="d-none d-md-table-cell font-size-sm">
                                                    {{$servicespage->name}}
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center font-size-sm">
                                                    <img src="{{$servicespage->image}}" style="width: 300px; height: 200px;" class="img-thumbnail img-fluid">
                                                </td>
                                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                                    <strong>{{$servicespage->created_at->diffForHumans()}}</strong>
                                                </td>
                                                <td class="text-center font-size-sm">
                                                    <a class="btn btn-sm btn-alt-secondary" href="{{route('admin.services-pages.edit' , $servicespage->id)}}" data-toggle="tooltip" title="View">
                                                        <i class="fa fa-fw fa-eye"></i>
                                                    </a>
                                                    <form action="{{route('admin.services-pages.destroy' , $servicespage->id)}}" method="post">
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
                        </div>
                    </div>
                </div>
        </div>



    </div>

@endsection
