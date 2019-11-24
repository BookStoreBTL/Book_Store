@extends('main.layout.index')
@section('content')
<div class="singel-product-details first-content">
	<div class="img"><img src="{{asset('img/bestsell-1.jpg')}}" alt="" class="img">
	</div>

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
		<p>Author:<span> Kristin Fields</span></p>
		<p>Category: <span> Biography</span></p><br>
		<p id="price">$14.99 &ensp;<span id="price-line-through">$19.99</span></p> <br>
		<button class="none">1</button> &nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button">Add to cart</button> <br><br><br>
		<p>Share this item:</p>
		<p>Facebook &nbsp; Twitter&nbsp; Pinterest&nbsp; Tumblr&nbsp; LinkedIn&nbsp; VKontakte&nbsp; Email</p>
	</div>

	<div class="details">
		<br><br><br>
		<div class="tr1">
			<h2>Books Details</h2>

			</ul>
		</div>
		<br>
		<p id="trs">Author &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <span>Kristin Fields</span></p>
		<hr>
		<p>Format &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Audiobook, Hardcover, Kindle Books, Paperback</span></p>
		<hr>
		<p>Language &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>English</span></p>
		<hr>
		<p>Pages&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>251</span></p>
		<hr>
		<p>Publisher &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Lake Union Publishing</span></p>
		<hr>
		<p>Year Published&emsp;&emsp;&emsp;&emsp;<span>2018</span></p>

	</div>
	<div class="review">
		<br><br><br><br><br><br>
		<h2>Reviews(0)</h2>
		<p>There are no review yet.</p>
		<br><br><br>
		<h2>Be the first to review "A lily in the light"</h2>
		<p>Your email address will not be published. Required fields are marked *</p>
		<br>
		<p>Yours Reviews</p>
		<textarea name="rev" id="" cols="160" rows="15"></textarea>
		<p>Email</p> <input type="email" width="">
		<button class="button">Submit</button>

	</div>
</div>
@endsection