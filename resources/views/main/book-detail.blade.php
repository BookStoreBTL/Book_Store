@extends('main.layout.index')
@section('content')

<div class="singel-product-details first-content container">

	<div class="row">
		<div class="col-lg-5 col-md-5">
			<div class="img">
				<img src="../img/{{$book_detail->img}}" alt="" class="book-img">
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
					<span id="price-sale">${{$book_detail->price}}</span>
					@else
					<span id="price-line-through">${{$book_detail->price}}</span>
					<span id="price-sale">${{$book_detail->sale_price}}</span>
					@endif
				</div>
				<div style="display: flex">
					<!-- <input class="quantity" type="number" step="1" min="0" value="1" size="4" inputmode="numeric"> -->
					<a href="{{route('addcart',$book_detail->id)}}"><button class="button">Add to cart</button></a>
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
						<span class="content">{{$book_detail->author->name}}</span>
					</div>
					<div class="table-row">
						<span class="title">Language</span>
						<span class="content">{{$book_detail->language->name}}</span>
					</div>
					<div class="table-row">
						<span class="title">Pages</span>
						<span class="content">{{$book_detail->page}}</span>
					</div>
					<div class="table-row">
						<span class="title">Publisher</span>
						<span class="content">{{$book_detail->publisher->name}}</span>
					</div>
					<div class="table-row">
						<span class="title">Year Published</span>
						<span class="content">{{$book_detail->release_year}}</span>
					</div>
				</div>
				<div class="tab-pane" id="reviews" role="tabpanel">
					<div class="comment">
						<ul class="cmt-list">
							@foreach($review as $r)
							<li class="cmt-list-item">
								<div class="cmt-item">
									<div class="cmt-item-img">
										<img src="{{asset('img/cmt-user.png')}}">
									</div>
									<div class="cmt-item-text">
										<div class="cmt-username">
											{{$r->user->user_name}}
										</div>
										<div class="cmt-time">
											{{$r->created_at}}
										</div>
										<div class="cmt-text">
											{{$r->title}}
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="review">
						<div class="review-title">
							Add a new review
							<div class="text-note">
								You must be logged in to review
							</div>
						</div>

						@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}} <br>
							@endforeach
						</div>
						@endif
						
						<form action="review/{{$book_detail->id}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="review-text">
								<textarea name="title" rows="5" style="width: 100%" type="text" autofocus
								@if(!Auth::check()) {{"disabled"}} 
								@endif
								placeholder="Enter your review ..."
								>
								</textarea>
							</div>
							<button type="submit" class="button">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row book-item">
		<div class="slq-title">Related Products</div>
		<div class="card-group">
			@foreach($books_relate as $item)
			<div class="col-sm-6 col-md-4 col-lg-2">
				<div class="card">
					<a href="{{route('book-detail',$item->id)}}">
						<img class="card-img-top" src="../img/{{$item->img}}" alt="Card image cap" height="350px">
					</a>
					<span class="onsale">
						sale!
					</span>
					<div class="card-body">
						<h4 class="card-title">
							<a href="{{route('book-detail',$item->id)}}">{{$item->name}}</a>
						</h4>
						<h6 class="card-text author">
							<small class="text-muted">
								<a href="">danielle steel</a>
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
	</div>
</div>
@endsection