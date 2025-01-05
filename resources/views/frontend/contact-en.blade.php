@extends('frontend.layouts.frontendEn')

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
<section class="contact-one" style="background-image:url(/frontend/images/background/map-1.png)">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<!-- <div class="sec-title_title">Contact us</div> -->
					<h2 class="sec-title_heading">Contact Us</h2>
				</div>
				<!-- <div class="right-box">
					<div class="sec-title_text">The perfect blend of mature processes, flexible delivery <br> models,effective project management.</div>
				</div> -->
			</div>
		</div>
		<div class="row clearfix">

			<!-- Info Column -->
			<div class="info-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="/frontend/images/icons/contact-1.png" alt="" /></span>
							<strong>Office address</strong>
							8 Rue Gerard Sevault,<br />78570 Chanteloup-les-vignes
						</div>
					</div>

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="/frontend/images/icons/contact-2.png" alt="" /></span>
							<strong>Phone number</strong>
							+33 6 62 54 45 33
						</div>
					</div>

					<!-- Contact Block -->
					<div class="contact-block">
						<div class="block-inner">
							<span class="icon"><img src="/frontend/images/icons/contact-3.png" alt="" /></span>
							<strong>Email address</strong>
							servicecommercial@ntrace-consulting.com
						</div>
					</div>

				</div>
			</div>

			<!-- Form Column -->
			<div class="form-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">

					<!-- Contact Form -->
					<div class="contact-form">
						<form method="post" id="contact-form">
							@csrf
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Name <span>*</span></label>
									<input type="text" id="name" name="name" placeholder="Your Name..."
										autocomplete="on">
									@error('name') <span class="text-danger">{{ $message }}</span> @enderror
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Email <span>*</span></label>
									<input type="email" id="email" name="email" placeholder="Your E-mail...">
									@error('email') <span class="text-danger">{{ $message }}</span> @enderror
								</div>

								<div class="col-lg-6 col-md-12 col-sm-12 form-group">
									<label>Phone <span>*</span></label>
									<input type="text" id="phone" name="phone"
										placeholder="Your Phone Number ...">
									@error('phone') <span class="text-danger">{{ $message }}</span> @enderror
								</div>

								<div class="col-lg-6 col-md-12 col-sm-12 form-group">
									<label>Subject</label>
									<input type="text" id="subject" name="subject" placeholder="Subject..."
										autocomplete="on">
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<label>Your message <span>*</span></label>
									<textarea id="message" name="message" placeholder="Your message"
										rows="5"></textarea>
									@error('message') <span class="text-danger">{{ $message }}</span> @enderror
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="btn-style-seven theme-btn" id="submit" type="button">
										<span class="btn-wrap">
											<span class="text-one">Send Message </span>
											<span class="text-two">Send Message </span>
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
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.5518195785844!2d2.0329465!3d48.9747808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e68b9a3ac692dd%3A0xd0677b303832ad42!2s8%20Rue%20d&#39;Andr%C3%A9sy%2C%2078570%20Chanteloup-les-Vignes%2C%20France!5e1!3m2!1sen!2slb!4v1736072398865!5m2!1sen!2slb"
			width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	</div>
</section>
<!-- End Map One -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function () {
		$('#submit').on('click', function (e) {
            e.preventDefault(); 

            var form = $('#contact-form');
            var formData = form.serialize(); 
            $.ajax({
                url: '{{ route('submitForm') }}',
                type: 'POST',
                data: formData,
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    }).then(() => {
                        window.location.href = '{{ route('contact-en') }}'; 
                    });

              
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#subject').val('');
                    $('#message').val('');
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = 'Something went wrong.';

                        if (errors.name) errorMessage = errors.name[0];
                        else if (errors.email) errorMessage = errors.email[0];
                        else if (errors.phone) errorMessage = errors.phone[0];
                        else if (errors.message) errorMessage = errors.message[0];

                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            text: errorMessage,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
							text: xhr.responseText,
                        });
                    }
                }
            });
        });
    });
</script>

@endsection