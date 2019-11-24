@extends('main.layout.index')
@section('content')
<div class="title search-result  first-content">
    <div class="section">
        <h1>1 results for " <span>a lily</span> "</h1>
        <p>We have found one match with the word you searched.</p>
        <br><br>

    </div>
    <div class="page">
        <div class="ha"><img src="{{asset('img/lily.jpg')}}" alt="" id="img"></div>
        <div class="text">
            <h3>A Lily in the Light</h3>
            <p>For eleven-year-old Esme, ballet is everything—until her four-year-old sister, Lily, vanishes without a trace and nothing is certain
                anymore. People Esme has known her whole life suddenly become suspects, each new one hitting closer to home than the last. Unable
                to cope, Esme escapes the nightmare that is her new reality when she receives an invitation to join an elite ballet academy in San
                Francisco. Desperate to leave behind her chaotic, broken family and the mystery surrounding Lily’s disappearance, Esme accepts.</p>
            <button class="button">Add to cart</button> &emsp; <span>continue</span>
        </div>
    </div>
</div>
@endsection