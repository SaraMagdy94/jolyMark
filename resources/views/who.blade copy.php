@include('includes.header')
@include('includes.nav')
@extends('layouts.app2')
@section('content')

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="../jolyfrontend/img/th.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>جولي مارك</h2>
                        <div class="breadcrumb__option">
                        <span> من نحن ؟</span>
                            <a href="{{url('/')}}">القائمه الرئيسيه </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Breadcrumb Section End -->
	<section class="who py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">
					تأسست جولى مارك عام 2020 ميلادي هدفنا الرئيسي ان نكون مختلفين عن الجميع في الإصدارات المميزة والتي تجعل المظهر الخارجي يلفت الانتباه و نقدم خدمات ما قبل وما بعد البيع
					</h4>
				<h1>{{__('messages.hello')}}</h1>
				</div>
			</div>
		</div>
</section>
<!--Carousel Wrapper-->
<section class="slider-who">
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
    <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
    <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides and lightbox-->

  <div class="carousel-inner mdb-lightbox" role="listbox">
    <div id="mdb-lightbox-ui"></div>
    <!--First slide-->
    <div class=" carousel-item active text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(12).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(12).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg"
            class="img-fluid">
        </a>
      </figure>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(33).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(33).jpg"
            class="img-fluid">
        </a>
      </figure>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(56).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(56).jpg"
            class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(77).jpg"
          data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(77).jpg"
            class="img-fluid">
        </a>
      </figure>

    </div>
  </div>
</div>
</section>

<!--/.Carousel Wrapper-->

    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
@include('includes.footerLink')
@include('includes.footer')
@endsection