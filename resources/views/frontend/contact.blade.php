@extends('frontend.layouts.frontend')

@section('content')

@if (session('success'))
<script>
	document.addEventListener('DOMContentLoaded', function () {
		Swal.fire({
			title: 'Success!',
			text: "{{ session('success') }}",
			icon: 'success',
			confirmButtonText: 'OK'
		});
	});
</script>
@endif

<!-- Contact One -->
<section class="contact-one" style="background-image:url(frontend/images/background/map-1.png)">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Contactez-Nous</div>
					<h2 class="sec-title_heading">Développez votre entreprise grâce <br> <span>à notre expertise</span>
					</h2>
				</div>
				<div class="right-box">
					<div class="sec-title_text">Le mélange parfait de processus matures, de livraison flexible <br>de
						modèles et de gestion de projet efficace.</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">

			<!-- Info Column -->
			<div class="info-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="frontend/images/icons/contact-1.png" alt="" /></span>
							<strong>Adresse du bureau</strong>
							Digital Agency Network 20 Eastbourne Terrace London W2 6LG
						</div>
					</div>

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="frontend/images/icons/contact-2.png" alt="" /></span>
							<strong>Numéro de téléphone</strong>
							(408) 389-5470 <br> (408) 456-5470
						</div>
					</div>

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="frontend/images/icons/contact-3.png" alt="" /></span>
							<strong>Adresse mail</strong>
							help@envato.com <br> help@support.com
						</div>
					</div>

				</div>
			</div>

			<!-- Form Column -->
			<div class="form-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">

					<!-- Contact Form -->
					<div class="contact-form">
						<form method="post" action="{{ route('submitForm') }}" id="contact-form"
							enctype="multipart/form-data">
							@csrf
							<div class="row clearfix">

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Nom <span>*</span></label>
									<input wire:model="name" type="text" id="name" name="name" placeholder="Your Nom..."
										autocomplete="on">
									@error('name') <span class="text-danger">{{ $message }}</span> @enderror

								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Email <span>*</span></label>
									<input wire:model="email" type="email" id="email" name="email"
										placeholder="Your E-mail...">
									@error('email') <span class="text-danger">{{ $message }}</span> @enderror

								</div>

								<div class="col-lg-6 col-md-12 col-sm-12 form-group">
									<label>Phone <span>*</span></label>
									<input wire:model="phone" type="text" id="phone" name="phone"
										placeholder="Your Phone Number...">
									@error('phone') <span class="text-danger">{{ $message }}</span> @enderror

								</div>

								<div class="col-lg-6 col-md-12 col-sm-12 form-group">
									<label>Sujet</label>
									<input wire:model="subject" type="text" id="subject" name="subject"
										placeholder="Sujet..." autocomplete="on">
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<label>Votre message <span>*</span></label>
									<textarea wire:model="message" id="message" name="message"
										placeholder="Votre message" rows="5"></textarea>
									@error('message') <span class="text-danger">{{ $message }}</span> @enderror

								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="btn-style-seven theme-btn" id="form-submit" type="submit">
										<span class="btn-wrap">
											<span class="text-one">Envoyer Un Message</span>
											<span class="text-two">Envoyer Un Message</span>
										</span>
									</button>
								</div>

							</div>
						</form>
					</div>
					<!-- End Comment Form -->
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Contact One -->

<!-- Map One -->
<section class="map-one">
	<div class="map-outer">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.3839261151554!2d35.4992537153429!3d33.893791680654245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1709bc836f69%3A0x1f8c33b28ec07e7e!2sBeirut%2C%20Lebanon!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
			width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	</div>
</section>
<!-- End Map One -->


@endsection