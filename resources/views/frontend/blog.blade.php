<!DOCTYPE html>
<html lang="en">
<head>
	<title>Istana Helmet-Artikel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('asets/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
            <a href="index.html">
            <img src="img/logo.png" alt="IMG-LOGO" data-logofixed="img/logoo.png">
            </a>
         </div>
					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
							<li>
								<a href="/index">Beranda</a>
							</li>
							<li>
								<a href="/gallery">Produk</a>
							</li>
							<li>
								<a href="/about">Tentang</a>
							</li>
							<li>
								<a href="/blog">Artikel</a>
							</li>
							<li>
								<a href="/kontak">Kontak</a>
							</li>
							</ul>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</header>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(img/background1.jpg);">
		<h2 class="tit6 t-center">
			Artikel
		</h2>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Blog
				</span>
			</div>
		</div>
		<h3 class="tit3 t-center m-b-35 m-t-5">
            Artikel
		</h3>
        @php
      $a = App\Artikel::all();
      @endphp
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                        <!-- Block4 -->
                        @foreach($a as $data)
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="/artikel/single/{{$data->id}}">
									<img src="{{asset('/gambar/artikel/'.$data->gambar.'')}}" width="100" height="350">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
									{{ date('d',strtotime($data->created_at)) }}
                                    </span>

									<span class="txt31">
                                    <b>{{ date('F Y',strtotime($data->created_at)) }}</b>
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="/artikel/single/{{$data->id}}" class="tit9">{!!$data->judul!!}</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
                                    {{ $data->created_at->diffForHumans() }}
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<a href="/artikel/single/{{$data->id}}" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
                        @endforeach
					</div>
				
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
					{{--  view composer  --}}
           			 @include('frontend.side')
            		{{--  end view composer  --}}
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
 <footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Kontak
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Jl. Astanaanyar No.210, Nyengseret, Astanaanyar, Kota Bandung, Jawa Barat 40242
							</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(022) 5228404
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							Istanahelmet@site.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
					Buka Jam:
					</h4>

					<ul>
						<li class="txt14">
						08:00 – 18:00
						</li>

						<li class="txt14">
						Setiap Hari
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
          @php
      $a = App\Artikel::all();
      @endphp
					<h4 class="txt13 m-b-33">
						Artikel 
					</h4>
          @foreach($a as $data)
					<div class="m-b-25">
						{{--  <span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>  --}}

						<p class="txt14 m-b-18">
							{!!$data->judul!!}
						</p>

              <a href="/artikel/single/{{$data->id}}" class="txt15">
							Lanjutkan Membaca 
						</a>

						<span class="txt16">|
            {{ $data->created_at->diffForHumans() }}
						</span>

					</div>
          @endforeach
          
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Produk Kami
					</h4>

					<!-- Gallery footer -->
					@php
					$barang = App\Barang::all();
					$kategori = App\Kategori::all();
					@endphp

					<div class="wrap-gallery-footer flex-w">
					@foreach($barang as $data)
						<a class="item-gallery-footer wrap-pic-w" href="{{asset('/gambar/barang/'.$data->gambar.'')}}" data-lightbox="gallery-footer">
							<img src="{{asset('/gambar/barang/'.$data->gambar.'')}}" alt="{!!$data->model!!}">
						</a>
					@endforeach</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('asets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('asets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asets/js/main.js')}}"></script>

</body>
</html>
