@extends('main.layout.index')
@section('content')
<div class="container-fluid">
        <div class="row">
            <img class="home-page" src="{{asset('img/home-page.jpg')}}" alt="">
        </div>
        <div class="home-page-layout layout">
            <div class="title-small">COME AND JOIN THE BOOK STORE</div>
            <div class="title-lagre">enjoy the silence in our reading room.</div>
        </div>
    </div>

    <div class="container book-section">
        <div class="row book-title">
            <div class="col-auto mr-auto">
                <h1>Books</h1>
            </div>
            <div class="col-auto">
                <ul class="list-group list-group-horizontal float-right">
                    <li class="list-group-item lgi-active">
                        <a href="">
                            <span>BEST SELLER</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <span>SELL</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row book-item">
            <div class="card-group">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <a href="{{route('book-detail')}}">
                            <img class="card-img-top" src="{{asset('img/bestsell-1.jpg')}}" alt="Card image cap" height="350px">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3">
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
        </div>
    </div>

    <div class="container-fluid author-month">
        <div class="row">
            <div class="col-md-5">
                <div class="author-image">
                    <img src="{{asset('img/author-month.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6" style="padding-top: 20px;">
                <p>AUTHOR OF THE MONTH</p>
                <h1 class="name">danielle steel</h1>
                <p class="descipt">Danielle Steel is an American author. Born in Idaho to a father opposed to public education, she never attended school. She spent her days working in her father’s junkyard or stewing herbs for her mother, a self-taught herbalist and midwife. She was seventeen the first time she set foot in a classroom.</p>
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/bestsell-1.jpg')}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="">Spy: A Novel</a>
                                </h5>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h6 class="card-text price">$23.00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/author-month-book-1.png')}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="">blessing in disguise: a novel</a>
                                </h5>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h6 class="card-text price">$13.91</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/author-month-book-2.jpg')}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="">silient night: a novel</a>
                                </h5>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h6 class="card-text price">$31.00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('img/author-month-book-3.jpg')}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="">lost ang found: a novel</a>
                                </h5>
                                <h6 class="card-text author">
                                    <small class="text-muted">
                                        <a href="">danielle steel</a>
                                    </small>
                                </h6>
                                <h6 class="card-text price">$15.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container feedback">
        <div id="carouselExampleControls" class=" row carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000">
                    <img class="per-item" src="{{asset('img/per-feedback-1.jpg')}}" alt="...">
                    <h5 class="feedback-text">“Quick & tidy. I found many new books in the Kalium Bookstore site.

                        I ordered some of them and I got the package the next day already and neatly. Super happy!”</h5>
                    <h5 class="per-name">harsanyi Zsigmond</h5>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img class="per-item" src="{{asset('img/per-feedback-2.jpg')}}" alt="...">
                    <h5 class="feedback-text">“Quick & tidy. I found many new books in the Kalium Bookstore site.

                        I ordered some of them and I got the package the next day already and neatly. Super happy!”</h5>
                    <h5 class="per-name">harsanyi Zsigmond</h5>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img class="per-item" src="{{asset('img/per-feedback-3.jpg')}}" alt="...">
                    <h5 class="feedback-text">“Quick & tidy. I found many new books in the Kalium Bookstore site.

                        I ordered some of them and I got the package the next day already and neatly. Super happy!”</h5>
                    <h5 class="per-name">harsanyi Zsigmond</h5>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a> -->
        </div>
    </div>
@endsection