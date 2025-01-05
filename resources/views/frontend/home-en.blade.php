@extends('frontend.layouts.frontendEn')

@section('content')



<!-- Main Slider -->
<section class="slider-two">
	<div class="single-item-carousel owl-carousel owl-theme">

		<!-- Slide -->
		<div class="slide">
			<div class="slider-two_image-layer" style="background-image:url(frontend/images/main-slider/2.jpg)"></div>
			<div class="slider-two_pattern-layer"
				style="background-image:url(frontend/images/main-slider/pattern-1.png)"></div>
			<div class="auto-container">

				<!-- Content Column -->
				<div class="slider-two-content">
					<div class="slider-two_inner">
						<!-- <div class="slider-two_title">We are Business Solution</div> -->
						<h1 class="slider-two_heading">Thriving in the Dynamic IT Services Market</h1>
						<div class="slider-two_text">We provide you with our international expertise to strengthen your digital projects.</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>
<!-- End Main Slider -->

<!-- Featured One 
<section class="featured-one">
	<div class="auto-container">
		<div class="row clearfix">

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					{{-- <a class="overlay-link" href="service-detail.html"></a> --}}
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-2.png" alt="" />
					</span>
					<h5 class="feature-block_one-title">Cyber Security</h5>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-4.png" alt="" />
					</span>
					<h5 class="feature-block_one-title">Network</h5>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-5.png" alt="" />
					</span>
					<h5 class="feature-block_one-title">Project Manager</h5>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-3.png" alt="" />
					</span>
					<h5 class="feature-block_one-title">Software Developement</h5>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-7.png" alt="" />
					</span>
					<h5 class="feature-block_one-title">Artificial Intelligence</h5>
				</div>
			</div>

		</div>
	</div>
</section>-->
<!-- End Featured One -->

<!-- About Two -->
<section id="aboutUs" class="about-two">
	<div class="about-two_pattern-two" style="background-image:url(frontend/images/background/pattern-13.png)"></div>
	<div class="auto-container">
		<div class="row clearfix">
			<!-- Content Column -->
			<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
				<div class="about-two_pattern-one"
					style="background-image:url(frontend/images/background/pattern-12.png)"></div>
				<div class="about-two_image">
					<img src="frontend/images/resource/about.png" alt="" />
				</div>
			</div>

			<!-- Content Column -->
			<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
				<div class="about-two_content-inner">
					<div class="sec-title_two">
						<!-- <div class="sec-title_two-title">About Our Company</div> -->
						<h2 class="sec-title_two-heading">Who are we</h2>
					</div>
					<div class="about-two_text">
						Ntrace Consulting was born from the idea of ​​creating a network of seasoned experts who have
						dedicated their careers to supporting companies in achieving their strategic objectives in terms
						of production and information technology (IT).
						Specializing in information technology services, Ntrace Consulting is part of a context where IT
						has become an essential element of each sector of activity, and where data management (DATA)
						is an essential lever for performance and innovation.
						In order to strengthen and optimize data-centric approaches, our team of expert consultants,
						working in various areas of IT, is mobilized to support companies in improving their services,
						infrastructures and applications. We are committed to helping you achieve your technological and
						strategic objectives with efficiency and excellence. </div>


				</div>
			</div>

		</div>
	</div>
</section>
<!-- End About Two -->

<!-- Services One -->
<section id="services" class="services-one">
	<div class="services-one_pattern-layer" style="background-image:url(frontend/images/background/pattern-14.png)">
	</div>
	<div class="auto-container">

		<!-- Sec Title -->
		<div class="sec-title_two centered">
			<!-- <div class="sec-title_two-title">~ Our Awesome Services ~</div> -->
			<h2 class="sec-title_two-heading">Our areas of expertise</h2>
		</div>

		<div class="services-one_inner-coontainer">
			<div class="four-item-carousel owl-carousel owl-theme">

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-11.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Cyber Security</h5>
						<a class="service-block_three-learn" href="#" data-service="Cyber Security"
							data-description="Our network of cybersecurity experts supports companies in the implementation and integration of advanced security solutions, including:
													CyberArk
													Wallix
													HashiCorp
													We also offer comprehensive network security services, as well as specialized cybersecurity solutions, including:
													Security Operations Centers (SOC)
													Security Information and Event Management (SIEM) systems
													Active Directory
													SailPoint
													And other solutions tailored to our customers' specific needs.
													Our services aim to strengthen the security, efficiency and compliance of identity management systems,
													while optimizing access and authorization processes within organizations and ensuring a proactive and effective response to cybersecurity challenges.">
							Learn More</a>

					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-9.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Network</h5>
						<a class="service-block_three-learn" href="#" data-service="Network"
							data-description="Our network services aim to provide reliable, high-performance and secure solutions to meet the growing connectivity and communication needs of businesses.
											We operate in the following areas:
											Network design and optimization: Analysis of needs, implementation of scalable and optimized network architectures to ensure smooth and efficient connectivity.
											Network security: Implementation of firewalls, VPNs, network segmentation and other measures to ensure protection against external and internal threats.
											Network management and monitoring: Proactive monitoring, performance management and incident resolution to maintain maximum availability.
											Infrastructure modernization: Migration to advanced technologies such as software-defined networks (SDN) and integration of cloud solutions for increased flexibility.
											Our experts are committed to supporting companies in the transformation and management of their network infrastructures, ensuring optimal performance and enhanced security.">
							Learn More</a>

					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-10.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Project Management</h5>
						<a class="service-block_three-learn" href="#" data-service="Project Management"
							data-description="Our experienced project managers play a key role in the success of our clients’ strategic and operational initiatives.
														We offer project management services tailored to your needs, including:
														Planning and coordination: Developing detailed project plans, managing resources, and tracking deadlines to ensure smooth and efficient execution.
														Stakeholder management: Coordinating between internal teams, vendors, and partners to ensure transparent communication and optimal collaboration.
														Performance monitoring: Implementing key performance indicators (KPIs) and reporting tools to track project progress and ensure alignment with strategic objectives.
														Risk management: Identifying, assessing, and mitigating risks to minimize contingencies and optimize results.
														With their expertise and mastery of methodologies such as Agile, Scrum, or Waterfall, our project managers ensure that each initiative is completed on time,
														while respecting budgets and quality requirements.">
							Learn More</a>

					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-8.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Software Developement</h5>
						<a class="service-block_three-learn" href="#" data-service="Software Developement"
							data-description="Our experienced developers, specialized in JavaScript technologies, offer complete solutions to meet the needs of your software development projects.
														We offer services covering the following areas:
														Front-end development: Creation of modern, intuitive and responsive user interfaces using recognized frameworks and libraries such as React.js, Angular, and Vue.js.
														Our front-end developers ensure an optimal user experience that complies with the latest design trends.
														Back-end development: Design and implementation of robust and scalable back-end systems, with technologies such as Node.js, Express, and other suitable frameworks.
														Our experts focus on ensuring high performance, enhanced security and smooth integration with databases and other services.
														Full-stack development: Versatile developers capable of taking charge of your entire project, from the user interface to the back-end,
														including databases. With their mastery of front-end and back-end technologies, our full-stack developers guarantee a fast and consistent delivery of solutions.
														Expertise in JavaScript: Development of custom applications, maintenance of existing solutions, performance optimization and implementation of best practices in all projects.
														Our developers are committed to providing tailor-made solutions, adapted to your specific needs, while respecting deadlines and quality requirements.
														">
							Learn More</a>

					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-9.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Artificial Intelligence (AI)</h5>

						<a class="service-block_three-learn" href="#" data-service="Artificial Intelligence (AI)"
							data-description="c to help our clients take advantage of this transformative technology. Our services include:
												Large Language Models (LLM): Development and customization of large-scale natural language processing models to meet the specific needs of your applications.
												AI Model Training: Data collection and preparation, model architecture design, and training to ensure optimal performance in various use cases.
												Generative AI: Development of solutions based on generative AI, such as content creation, data synthesis, or image and text generation.
												Integration with your applications: Implementation of interfaces to integrate technologies like ChatGPT directly into your applications, to enrich your functionalities and improve user interaction.
												Data collection and management: Acquisition, cleaning and structuring of data necessary for training AI models, while respecting ethical and regulatory standards.
												Our team of AI experts is committed to providing innovative and tailor-made solutions, adapted to your strategic objectives, while ensuring that the technologies deployed are robust, ethical and efficient.
												">
							Learn More</a>

					</div>
				</div>


			</div>
		</div>
	</div>

	<div id="service-modal" class="modal hidden">
		<div class="modal-content">
			<span id="modal-close" class="modal-close">&times;</span>
			<h3 id="modal-title"></h3>
			<p id="modal-description"></p>
		</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", () => {
			const modal = document.getElementById("service-modal");
			const modalTitle = document.getElementById("modal-title");
			const modalDescription = document.getElementById("modal-description");
			const closeModal = document.getElementById("modal-close");
	
			// Show modal on Learn More click
			document.querySelectorAll(".service-block_three-learn").forEach(button => {
				button.addEventListener("click", (event) => {
					event.preventDefault();
					const serviceTitle = button.getAttribute("data-service");
					const serviceDescription = button.getAttribute("data-description");
	
					modalTitle.textContent = serviceTitle;
					modalDescription.textContent = serviceDescription;
	
					modal.style.display = "flex"; // Show modal
				});
			});
	
			// Close modal
			closeModal.addEventListener("click", () => {
				modal.style.display = "none";
			});
	
			// Close modal when clicking outside the modal content
			window.addEventListener("click", (event) => {
				if (event.target === modal) {
					modal.style.display = "none";
				}
			});
		});
	</script>
</section>
<!-- End Services One -->



@endsection