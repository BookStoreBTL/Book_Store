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
                    <form action="" class="search-bar">
                        <input class="searcj-text" type="search" placeholder="Search products ...">
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
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="cart.html">
                                <img class="card-img-top" src="{{asset('img/Y5idy_bestsell-1.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <span class="onsale">
                                sale!
                            </span>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('book-detail')}}">Spy: A Novel</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">
                                    <span class="old-price">$23.00</span>
                                    <span>$20.00</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-2.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">A Brief History of Time</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">stephen hawking</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$21.51</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-3.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">Eat Fat, Get Thin</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">mark hyman m.d</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$15.39</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-4.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">Say Nothing</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">patrick radden keefe</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$18.87</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-5.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">The Friend</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">sigrid nunez</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$15.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-6.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">Wnter Loon: A Novel</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">susan bernhard</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$11.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-7.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">Born a Crime</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">trevor noah</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$13.49</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-8.jpg')}}" alt="Card image cap" height="350px">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="">Silient Night: A Novel</a>
                                </h4>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h5 class="card-text price">$31.00</h5>
                            </div>
                        </div>
                    </div>
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