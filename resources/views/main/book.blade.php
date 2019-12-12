@extends('main.layout.index')
@section('content')
<div class="container book-section first-content">
    <div class="row book-title">
        <div class="col-auto mr-auto">
            <h1>All Books</h1>
        </div>
        <div class="col-auto">
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
        </div>
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
                                    <li>
                                        <a href="">
                                            Camille Pagán
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Dr. Seuss
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Marlon James
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Ned Vizzini
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            R. J. Palacio
                                        </a>
                                    </li>
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
                                    <li>
                                        <a href="">
                                            Biography
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Children's
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Cooking
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Drama
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Family
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Mystery
                                        </a>
                                    </li>
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
                                    <li>
                                        <a href="">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            French
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            German
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Japanese
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Spanish
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Vietnamese
                                        </a>
                                    </li>
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
                    <div class="row">{{$books->links()}}</div>
                </div>
                
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
@endsection