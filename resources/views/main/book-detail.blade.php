@extends('main.layout.index')
@section('content')

<div class="singel-product-details first-content container">

	<div class="row">
		<div class="col-lg-5 col-md-5">
			<div class="img">				
				<img src="../img/{{$book_detail->img}}" alt="" class="img">
			</div>
		</div>

		<div class="col-sm-7 col-md-7">
			<div class="text">
				<h1>{{$book_detail->name}}</h1>
				<p>{{$book_detail->description}}</p> <br>
				<p>Author:<span class="name"> {{$book_detail->author->name}}</span></p>
				<p>Category: <span class="name"> {{$book_detail->category->name}}</span></p>
				<div class="price">
					@if($book_detail->sale_price == 0)
					<span id="price-line-through">${{$book_detail->price}}</span>                              
					@else
					<span id="price-line-through">${{$book_detail->price}}</span>
					<span id="price-sale">${{$book_detail->sale_price}}</span>
					@endif
				</div>
				<div style="display: flex">
					<input class="quantity" type="number" step="1" min="0" value="1" size="4" inputmode="numeric">
					<button class="button">Add to cart</button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="list-group" id="myList" role="tablist">
				<a class="list-group-item list-group-item-action active" data-toggle="list" href="#book-details" role="tab">Book Details</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#reviews" role="tab">Reviews</a>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="tab-content">
				<div class="tab-pane active" id="book-details" role="tabpanel">
					<div class="table-row">
						<span class="title">Author</span>
						<span class="content">Danielle Steel</span>
					</div>
					<div class="table-row">
						<span class="title">Language</span>
						<span class="content">English</span>
					</div>
					<div class="table-row">
						<span class="title">Pages</span>
						<span class="content">264</span>
					</div>
					<div class="table-row">
						<span class="title">Publisher</span>
						<span class="content">Nha xuat ban Tre</span>
					</div>
					<div class="table-row">
						<span class="title">Year Published</span>
						<span class="content">2007</span>
					</div>
				</div>
				<div class="tab-pane" id="reviews" role="tabpanel">
					<div class="comment">
						<ul class="cmt-list">
							<li class="cmt-list-item">
								<div class="cmt-item">
									<div class="cmt-item-img">
										<img src="{{asset('img/cmt-user.png')}}">
									</div>
									<div class="cmt-item-text">
										<div class="cmt-username">
											maidoan2017
										</div>
										<div class="cmt-time">
											August 6, 2019
										</div>
										<div class="cmt-text">
											very good. toi chua doc quyen sach nao hay den the
										</div>
									</div>
								</div>
							</li>

							<li class="cmt-list-item">
								<div class="cmt-item">
									<div class="cmt-item-img">
										<img src="{{asset('img/cmt-user.png')}}">
									</div>
									<div class="cmt-item-text">
										<div class="cmt-username">
											nguyenthutrang
										</div>
										<div class="cmt-time">
											August 6, 2019
										</div>
										<div class="cmt-text">
											qua xuat sac. khong hoi han vi da mua quyen sach nay
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="review">
						<div class="review-title">
							Add a new review
							<div class="text-note">
								You must be logged in to review
							</div>
						</div>
						<div class="review-text">
							<textarea rows="5" style="width: 100%" type="text" placeholder="Enter your review ..." disabled></textarea>
						</div>
						<button type="submit" class="button">Submit</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row book-item">
		<div class="slq-title">Related Products</div>
		<div class="card-group">
                <div class="col-sm-6 col-md-4 col-lg-2">
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
                <div class="col-sm-6 col-md-4 col-lg-2">
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
                <div class="col-sm-6 col-md-4 col-lg-2">
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
                <div class="col-sm-6 col-md-4 col-lg-2">
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
				<div class="col-sm-6 col-md-4 col-lg-2">
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
				<div class="col-sm-6 col-md-4 col-lg-2">
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
            </div>
	</div>
</div>
@endsection