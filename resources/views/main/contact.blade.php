@extends('main.layout.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
<div class="container first-content contact-section">
    <div class="row">
        <div class="col-md-6">
            <div class="conact-title">
                <div class="title">
                    Contact
                </div>
                <div class="note">
                    Do you have any special request or delivery, please contact us for more. We are available every workday from 08:00 to 17:00.
                </div>
            </div>
            <div class="contact-address row">
                <div class="col-sm-6">
                    UET Bookstore<br>
                    144 Xuuan Thuy,<br>
                    Cau Giay, Ha Noi
                </div>
                <div class="col-sm-6">
                    Tel: 202-555-0121<br>
                    Fax: 302-555-0121<br>
                    E-mail: info@example.com
                </div>
            </div>
            <form action="contact" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="contact-content">
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            <input name="" type="text" placeholder=" Your name: " style="height: 42px" autofocus>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" placeholder=" Your email: ">
                        </div>
                    </div> -->

                    @if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}} <br>
							@endforeach
						</div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        
                    <textarea autofocus name="title" type="text" placeholder="Your message: " rows="8" style="width: 100%"></textarea>
                    <button class="button" type="submit">Send message</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div style="width: 100%; padding-left: 10px">
                <iframe width="100%" height="550" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%90%E1%BA%A1i%20h%E1%BB%8Dc%20Qu%E1%BB%91c%20gia%20H%C3%A0%20N%E1%BB%99i%20(VNU)%2C%20Xu%C3%A2n%20Th%E1%BB%A7y%2C%20Mai%20D%E1%BB%8Bch%2C%20C%E1%BA%A7u%20Gi%E1%BA%A5y%2C%20H%C3%A0%20N%E1%BB%99i%2C%20Vi%E1%BB%87t%20Nam+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    <a href="https://www.maps.ie/coordinates.html">gps coordinates finder
                    </a>
                </iframe>
            </div>
        </div>
    </div>
</div>

@endsection