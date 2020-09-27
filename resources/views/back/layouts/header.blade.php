<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('back')}}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('back')}}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('back')}}/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    @yield('css')
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('back')}}/assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Light themed Header
    'page-header-dark'                          Dark themed Header

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay" class="font-size-sm">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->


    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="font-w600 text-dual" href="{{route('admin.dashboard')}}">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="smini-hide">
                            <span class="font-w700 font-size-h5">ne</span>
                        </span>
            </a>
            <!-- END Logo -->

            <!-- Extra -->

            <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link @if(Request::segment(2) == 'panel')  active  @endif" href="{{route('admin.dashboard')}}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item @if(Request::segment(2) == 'album-category') open @endif  @if(Request::segment(2) == 'slider') open @endif @if(Request::segment(2) == 'photos') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == 'album-category')  aria-expanded="true"  @endif href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name">Medya Sistemi</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item @if(Request::segment(2) == 'album-category') open @endif @if(Request::segment(2) == 'photos') open @endif">
                            <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true"  @if(Request::segment(2) == 'album-category') aria-expanded="true" @endif href="#">
                                <i class="nav-main-link-icon si si-bag"></i>
                                <span class="nav-main-link-name">Albüm Yönetimi</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link  @if(Request::segment(2) == 'album-category') active @endif" href="{{route('admin.album-category.index')}}">
                                        <span class="nav-main-link-name">Albüm Kategori</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link @if(Request::segment(2) == 'photos') active @endif" href="{{route('admin.photos.index')}}">
                                        <span class="nav-main-link-name">Fotoğraf Yönetimi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-main-item @if(Request::segment(2) == 'slider') open @endif">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == 'slider')  aria-expanded="true" @endif href="#">
                                <i class="nav-main-link-icon si si-handbag"></i>
                                <span class="nav-main-link-name">Slider Yönetim</span>
                            </a>
                            <ul class="nav-main-submenu  @if(Request::segment(2) == 'slider') open @endif">
                                <li class="nav-main-item ">
                                    <a class="nav-main-link @if(Request::segment(2) == 'slider') active @endif" href="{{route('admin.slider.index')}}">
                                        <span class="nav-main-link-name">Slider</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link  @if(Request::segment(3) == 'create') active @endif" href="{{route('admin.slider.create')}}">
                                        <span class="nav-main-link-name">Slider Ekle</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-main-heading">İçerik Yönetimi</li>
                <li class="nav-main-item @if(Request::segment(2) == 'kategori') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == "kategori")  aria-expanded="true" @endif href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Kategori</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(Request::segment(2) == 'kategori') active @endif" href="{{route('admin.kategori.index')}}">
                                <span class="nav-main-link-name">Kategori Yönetimi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item @if(Request::segment(2) == 'urunler') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == 'urunler') aria-expanded="true" @endif  href="#">
                        <i class="nav-main-link-icon si si-badge"></i>
                        <span class="nav-main-link-name">Ürünler</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(Request::segment(2) == 'urunler') active @endif" href="{{route('admin.urunler.index')}}">
                                <span class="nav-main-link-name">Ürün Yönetimi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item @if(Request::segment(2) == 'posts') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == 'posts') aria-expanded="true" @endif  href="#">
                        <i class="nav-main-link-icon si si-grid"></i>
                        <span class="nav-main-link-name">Haberler</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(Request::segment(2) == 'posts') active @endif" href="{{route('admin.posts.index')}}">
                                <span class="nav-main-link-name">Haber Yönetimi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item @if(Request::segment(2) == 'pages') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" @if(Request::segment(2) == 'pages') aria-expanded="true" @endif href="#">
                        <i class="nav-main-link-icon si si-note"></i>
                        <span class="nav-main-link-name">Sayfalar</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(Request::segment(2) == 'pages') active @endif" href="{{route('admin.pages.index')}}">
                                <span class="nav-main-link-name">Sayfa Yönetimi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Ayarlar&Bilgiler</li>
                <li class="nav-main-item">
                    <a class="nav-main-link @if(Request::segment(2) == 'ayarlar')  active  @endif" href="{{route('admin.config')}}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Ayarlar&Bilgiler</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Toggle Mini Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

                <!-- Apps Modal -->


                <!-- Open Search Section (visible on smaller screens) -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                    <i class="si si-magnifier"></i>
                </button>

            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-sm-inline-block ml-1">Adam</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.logout')}}">
                                <span>Log Out</span>
                                <i class="si si-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->


                <!-- Toggle Side Overlay -->

            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
