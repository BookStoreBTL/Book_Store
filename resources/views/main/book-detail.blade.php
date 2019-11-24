@extends('main.layout.index')
@section('content')
<div class="singel-product-details first-content container">

	<div class="row">
		<div class="col-lg-5 col-md-5">
			<div class="img">
				<img src="{{asset('img/bestsell-1.jpg')}}" alt="" class="img">
			</div>
		</div>

		<div class="col-sm-7 col-md-7">
			<div class="text">
				<h1>Spy: A Novel</h1>
				<p>For eleven-year-old Esme, ballet is everything—until
					her four-year-old sister, Lily, vanishes without a
					trace and nothing is certain anymore. People Esme has known her
					whole life suddenly become suspects, each new one hitting
					closer to home than the
					last. <br><br>
					Unable to cope, Esme escapes the nightmare that is her new
					reality when she receives an invitation to join an elite ballet
					academy in San Francisco. Desperate to leave behind her chaotic,
					broken family and the mystery surrounding Lily’s disappearance,
					Esme accepts.</p> <br>
				<p>Author:<span class="name"> Kristin Fields</span></p>
				<p>Category: <span class="name"> Biography</span></p>
				<div class="price">
					<span id="price-line-through">
						$19.99
					</span>
					<span id="price-sale">
						$14.99
					</span>
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
					<table>
						<tbody>
							<tr class="tr-table">
								<th scope="row">Author</th>
								<td>
									<p>Danielle Steel</p>
								</td>
							</tr>
							<tr>
								<th>Language</th>
								<td>
									<p>English</p>
								</td>
							</tr>
							<tr>
								<th>Pages</th>
								<td>
									<p>264</p>
								</td>
							</tr>
							<tr>
								<th>Publisher</th>
								<td>
									<p>Nha xuat ban Tre</p>
								</td>
							</tr>
							<tr>
								<th>Year Published</th>
								<td>
									<p>2007</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="reviews" role="tabpanel">...</div>
			</div>
		</div>

	</div>
</div>
@endsection