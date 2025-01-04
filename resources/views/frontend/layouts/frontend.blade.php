<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ntrace-Consulting | Home</title>
	<!-- Stylesheets -->
	<link href="frontend/css/bootstrap.css" rel="stylesheet">
	<link href="frontend/css/style.css" rel="stylesheet">
	<link href="frontend/css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<link rel="shortcut icon" href="{{asset('frontend/images/logo-ntrace.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('frontend/images/logo-ntrace.png')}}" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>
		<!-- End Preloader -->

		<!-- Main Header / Header Style Two -->
		<header class="main-header header-style-two">

			<!-- Header Top 
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>(678) 345-3456</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>envato@mail.com</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>380 Albert St, Melbourne, Australia</a></li>
					</ul>
					
					<ul class="header-social_box">
						<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
						<li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
					</ul>
					
				</div>
			</div>
		</div>-->

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container d-flex">
						<!-- Logo Box -->
						<div class="logo">
							<a href="{{route('home')}}">
								<img src="frontend/images/logo-ntrace.png" alt="" title="">
							</a>
						</div>

						<!-- Upper Right -->
						<div class="upper-right">
							<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

								<!-- Main Menu -->
								<nav class="main-menu show navbar-expand-md">
									<div class="navbar-header">
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li class="{{ request()->is('/') ? " current" : "" }}"><a
													href="{{route('home')}}">Page d'accueil</a></li>
											<li class=""><a href="#aboutUs">À Propos De Nous</a></li>
											<li class=""><a href="#services">Domaines d'expertise</a></li>
											<li class="{{ request()->is('contact*') ? " current" : "" }}"><a
													href="{{route('contact')}}">Contactez-nous</a></li>
										</ul>
									</div>

								</nav>
								<!-- Main Menu End-->

								<div class="outer-box d-flex align-items-center">

									<!-- Search Box -->
									{{-- <div class="search-box">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="search" name="search-field" value=""
													placeholder="Search..." required>
												<button type="submit"><span class="icon fa fa-search"></span></button>
											</div>
										</form>
									</div> --}}

									<div class="language dropdown">
										<button class="btn dropdown-toggle" type="button" id="dropdownMenu1"
											data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-solid fa-globe fa-fw"></i>
											@if (Route::currentRouteName() === 'home' || Route::currentRouteName() ===
											'contact')
											French
											@elseif (Route::currentRouteName() === 'home-en' ||
											Route::currentRouteName() === 'contact-en')
											English
											@endif
											&nbsp;<span class="fa fa-angle-down"></span>
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li>
												<a href="{{ route('home') }}">
													French
													@if (Route::currentRouteName() === 'home' ||
													Route::currentRouteName() === 'contact')
													<span class="active-indicator">(Active)</span>
													@endif
												</a>
											</li>
											<li>
												<a href="{{ route('home-en') }}">
													English
													@if (Route::currentRouteName() === 'home-en' ||
													Route::currentRouteName() === 'contact-en')
													<span class="active-indicator">(Active)</span>
													@endif
												</a>
											</li>
										</ul>
									</div>


									{{-- <div class="button-box">
										<a class="btn-style-three theme-btn btn-item" href="#">
											<div class="btn-wrap">
												<span class="text-one">Get a quote now <i
														class="fa-solid fa-arrow-right fa-fw"></i></span>
												<span class="text-two">Get a quote now <i
														class="fa-solid fa-arrow-right fa-fw"></i></span>
											</div>
										</a>
									</div> --}}

									<!-- Mobile Navigation Toggler -->
									<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Sticky Header  -->
			<div class="sticky-header">
				<div class="auto-container">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Logo -->
						<div class="logo">
							<a href="{{route('home')}}" title=""><img src="frontend/images/logo-ntrace.png" alt=""
									title=""></a>
						</div>

						<!-- Right Col -->
						<div class="right-box d-flex align-items-center flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu">
								<!--Keep This Empty / Menu will come through Javascript-->
							</nav>
							<!-- Main Menu End-->

							<div class="outer-box d-flex align-items-center">

								<!-- Search Box -->
								{{-- <div class="search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value="" placeholder="Search..."
												required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div> --}}

								<div class="language dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu1"
										data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa-solid fa-globe fa-fw"></i>
										@if (Route::currentRouteName() === 'home' ||
										Route::currentRouteName() === 'contact')
										French
										@elseif (Route::currentRouteName() === 'home-en'||
													Route::currentRouteName() === 'contact-en')
										English
										@endif
										&nbsp;<span class="fa fa-angle-down"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li>
											<a href="{{ route('home') }}">
												French
												@if (Route::currentRouteName() === 'home'||
													Route::currentRouteName() === 'contact')
												<span class="active-indicator">(Active)</span>
												@endif
											</a>
										</li>
										<li>
											<a href="{{ route('home-en') }}">
												English
												@if (Route::currentRouteName() === 'home-en'||
													Route::currentRouteName() === 'contact-en')
												<span class="active-indicator">(Active)</span>
												@endif
											</a>
										</li>
									</ul>
								</div>

								{{-- <div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Get a quote now <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Get a quote now <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div> --}}

								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

							</div>

						</div>

					</div>
				</div>
			</div>

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
				<nav class="menu-box">
					<div class="nav-logo"><a href="{{route('home')}}"><img src="frontend/images/logo-ntrace.png" alt=""
								title=""></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div>

		</header>


		@yield('content')


		<!-- Footer -->
		<footer class="main-footer" style="background-image:url(frontend/images/background/pattern-11.png)">
			<div class="auto-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-4">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="{{route('home')}}"><img
													src="{{asset('frontend/images/logo-ntrace-white.png')}}" alt=""
													width="80%" /></a>
										</div>
										<div class="text">Nous travaillons avec la passion de relever des défis et d'en
											créer de nouveaux dans le secteur de la publicité.</div>
										{{-- <a href="#aboutUs" class="theme-btn about-btn">About us</a> --}}
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-8">
									<div class="footer-widget newsletter-widget">
										<h4>Bulletin</h4>
										<div class="text">Abonnez-vous à notre newsletter pour recevoir nos dernières
											mises à jour et actualités</div>

										<!-- Email Box -->
										<div class="email-box">
											<form id="subscribe-form" method="POST">
												@csrf
												<div class="form-group">
													<input type="email" id="email" name="email"
														placeholder="Votre E-mail..." required>
													<button id="form-submit" type="submit">
														<span class="icon fa-solid fa-paper-plane fa-fw"></span>
													</button>
												</div>
											</form>
										</div>

										<!-- Social Box -->
										<ul class="social-box">
											<li><a href="https://www.facebook.com/"
													class="fa-brands fa-facebook-f fa-fw"></a></li>
											<li><a href="https://www.twitter.com/"
													class="fa-brands fa-twitter fa-fw"></a></li>
											<li><a href="https://linkedin.com/" class="fa-solid fa-linkedin fa-fw"></a>
											</li>
											<li><a href="https://behance.com/" class="fa-solid fa-behance fa-fw"></a>
											</li>
										</ul>
										<!-- End Social Box -->

									</div>
								</div>

							</div>
						</div>


					</div>
				</div>

				<div class="footer-bottom">
					<div class="copyright">
						Ntrace Consulting © @php echo date('Y'); @endphp.
						Conçu et Développé par <a href="https://binarycords.com" target="_blank">Binary Cords</a>
					</div>
				</div>

			</div>
		</footer>

		<!-- Search Popup 
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
		
</div>
<!-- End PageWrapper -->

		<!-- Scroll To Top -->
		<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

		<script src="frontend/js/jquery.js"></script>
		<script src="frontend/js/appear.js"></script>
		<script src="frontend/js/owl.js"></script>
		<script src="frontend/js/wow.js"></script>
		<script src="frontend/js/odometer.js"></script>
		<script src="frontend/js/mixitup.js"></script>
		<script src="frontend/js/popper.min.js"></script>
		<script src="frontend/js/parallax-scroll.js"></script>
		<script src="frontend/js/parallax.min.js"></script>
		<script src="frontend/js/bootstrap.min.js"></script>
		<script src="frontend/js/tilt.jquery.min.js"></script>
		<script src="frontend/js/magnific-popup.min.js"></script>

		<script src="frontend/js/script.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script>
			$(document).ready(function () {
				$('#form-submit').on('click', function (e) {
					e.preventDefault(); 

					var form = $('#subscribe-form');
					var formData = form.serialize(); 

					var url = '{{ route('subscribe') }}'; 


					$.ajax({
						url: url,
						type: 'POST',
						data: formData,
						success: function(response) {
							Swal.fire({
								icon: 'success',
								title: 'Success!',
								text: response.message,
							}).then(() => {
							
								window.location.href = '{{ route('home') }}'; 
							});

							$('#email').val('');
						},
						error: function(xhr) {
							if (xhr.status === 422) {
								var errors = xhr.responseJSON.errors;
								Swal.fire({
									icon: 'error',
									title: 'Validation Error',
									text: errors.email ? errors.email[0] : 'Something went wrong.',
								});
							} else {
								Swal.fire({
									icon: 'error',
									title: 'Error',
									text: 'An unexpected error occurred. Please try again later.',
								});
							}
						}
					});
				});
			});
		</script>



</body>

</html>