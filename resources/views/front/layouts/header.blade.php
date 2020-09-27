<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$config->name}}</title>
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <img src="{{$config->image}}" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link text-white" href="{{route('homepage')}}">Anasaya <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kurumsal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($corparatepages as $page)
                            <a class="dropdown-item" href="{{route('corparate' , $page->slug)}}">{{$page->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ürünlerimiz
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($productcategories as $category)
                                @if($category->getCount->count() > 0)
                            <a class="dropdown-item" href="{{route('category' ,$category->slug)}}">{{$category->name}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hizmetler
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($servicepages as  $page)
                            <a class="dropdown-item" href="{{route('service', $page->slug)}}">{{$page->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link text-white" href="{{route('posts')}}">Haberler</a>
                    </li>
                    <li class="nav-item dropdown mr-1">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Medya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('albums')}}">Resim Galerisi</a>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link text-white" href="{{route('contact')}}">İletişim</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
                </form>
            </div>
        </nav>
    </div>
</header>
