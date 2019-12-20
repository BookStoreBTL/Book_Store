@extends('main.layout.index')

@section('content')
<div class="container book-section first-content">
    <div class="row book-title">
        <div class="col-auto mr-auto">
            <h1>All Books</h1>
        </div>

        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif

        <!-- <div class="col-auto">
            <div class="dropdown sort">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Default sorting
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sort by price</a>
                    <a class="dropdown-item" href="#">Sort by rating</a>
                    <a class="dropdown-item" href="#">Sort by popularity</a>
                    <a class="dropdown-item" href="#">Default sorting</a>
                </div>
            </div>
        </div> -->
    </div>

    <div class="book-item" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="search">
                    <form action="{{route('search')}}" class="search-bar">
                        <input class="searcj-text" type="search" name="search" placeholder="Search products ...">
                        <button type="submit" value="Search">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="accordion filter" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Author
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    @foreach($authors as $a)
                                    <li>
                                        <a href="{{ route('author', $a->id) }}">
                                            {{$a->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Category
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    @foreach($category as $c)
                                    <li>
                                        <a href="{{ route('category', $c->id) }}">
                                            {{$c->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Language
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    @foreach($language as $l)
                                    <li>
                                        <a href="{{ route('language', $l->id) }}">
                                            {{$l->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Publisher
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    @foreach($publisher as $p)
                                    <li>
                                        <a href="{{ route('publisher', $p->id) }}">
                                            {{$p->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9">
                <div class="card-group">
                    @foreach($books as $item)
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="{{route('book-detail', $item->id)}}">
                                <img class="card-img-top" src="img/{{$item->img}}" alt="Card image cap" height="350px">
                            </a>
                            <span class="onsale">
                                sale!
                            </span>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('book-detail', $item->id)}}">{{$item->name}}</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">{{$item->author->name}}</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">
                                    @if($item->sale_price == 0)
                                    <span>${{$item->price}}</span>
                                    @else
                                    <span class="old-price">${{$item->price}}</span>
                                    <span>${{$item->sale_price}}</span>
                                    @endif
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <nav aria-label="Page navigation">
                    {{$books->links()}}
                </nav>
            </div>
        </div>

    </div>
</div>
@endsection