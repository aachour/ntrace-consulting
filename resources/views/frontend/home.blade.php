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
						<!-- <div class="slider-two_title">Nous sommes une solution d'affaires</div> -->
						<h1 class="slider-two_heading">Prospérer dans le marché dynamique des services informatiques</h1>
						<div class="slider-two_text">Nous mettons à votre disposition notre expertise internationale pour renforcer vos projets numériques.</div>
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
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-2.png" alt="" />
					</span>
					<h6 class="feature-block_one-title">Cyber Sécurité</h6>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-4.png" alt="" />
					</span>
					<h6 class="feature-block_one-title">Réseau</h6>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-5.png" alt="" />
					</span>
					<h6 class="feature-block_one-title">Intelligence Artificielle</h6>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-3.png" alt="" />
					</span>
					<h6 class="feature-block_one-title">Chef de Projets</h6>
				</div>
			</div>

			<div class="feature-block_one">
				<div class="feature-block_one-inner">
					<span class="color-layer"></span>
					<span class="feature-block_one-icon">
						<img src="frontend/images/icons/service-7.png" alt="" />
					</span>
					<h6 class="feature-block_one-title">Développement Logiciel</h6>
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
						<!-- <div class="sec-title_two-title">À propos de nous</div> -->
						<h2 class="sec-title_two-heading">Qui sommes nous</h2>
					</div>
					<div class="about-two_text">
						Ntrace Consulting est née de l'idée de créer un réseau d'experts chevronnés ayant consacré leur
						carrière à accompagner les entreprises dans l'atteinte de leurs objectifs stratégiques en
						matière de production et de technologies de l'information (IT).
						Spécialisée dans les services liés aux technologies de l'information, Ntrace Consulting
						s'inscrit dans un contexte où l'IT est devenu un élément incontournable de chaque secteur
						d'activité, et où la gestion des données (DATA)
						s'impose comme un levier essentiel de performance et d'innovation.
						Afin de renforcer et d'optimiser les approches centrées sur les données, notre équipe de
						consultants experts, intervenant dans divers domaines de l'IT, se mobilise pour accompagner les
						entreprises dans l'amélioration de leurs services,
						infrastructures et applications. Nous nous engageons à vous aider à atteindre vos objectifs
						technologiques et stratégiques avec efficacité et excellence.
					</div>

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
			<!-- <div class="sec-title_two-title">~ Domaines d'expertise ~</div> -->
			<h2 class="sec-title_two-heading">Nos domaines d’expertises</h2>
		</div>

		<div class="services-one_inner-coontainer">
			<div class="four-item-carousel owl-carousel owl-theme">

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-11.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Cyber Sécurité</h5>
						<a class="service-block_three-learn" href="#" data-service="Cyber Sécurité"
							data-description="Notre réseau d’experts en cybersécurité accompagne les entreprises dans l’implémentation et l’intégration de solutions de sécurité avancées, notamment :											
							CyberArk
							Wallix
							HashiCorp
							Nous proposons également des services complets en sécurité réseau, ainsi que des solutions spécialisées en cybersécurité, incluant :		
							Les centres opérationnels de sécurité (SOC)
							Les systèmes de gestion des événements et des informations de sécurité (SIEM)
							Active Directory
							SailPoint
							Et d’autres solutions adaptées aux besoins spécifiques de nos clients.
							Nos services visent à renforcer la sécurité, l’efficacité et la conformité des systèmes de gestion des identités,
							tout en optimisant les processus d’accès et d’autorisation au sein des organisations et en assurant une réponse proactive et efficace face aux défis de la cybersécurité.">
							En savoir plus
						</a>
					</div>
				</div>


				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-9.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Réseau</h5>
						<a class="service-block_three-learn" href="#" data-service="Réseau"
							data-description="Nos services réseaux visent à fournir des solutions fiables, performantes et sécurisées pour répondre aux besoins croissants en connectivité et en communication des entreprises.
											Nous intervenons dans les domaines suivants :
											Conception et optimisation des réseaux : Analyse des besoins, mise en place d’architectures réseaux évolutives et optimisées pour garantir une connectivité fluide et performante.
											Sécurité des réseaux : Mise en œuvre de pare-feu, VPN, segmentation réseau et autres mesures pour assurer la protection contre les menaces externes et internes.
											Gestion et supervision des réseaux : Surveillance proactive, gestion des performances et résolution des incidents pour maintenir une disponibilité maximale.
											Modernisation des infrastructures : Migration vers des technologies avancées comme les réseaux définis par logiciel (SDN) et l'intégration de solutions cloud pour une flexibilité accrue.
											Nos experts sont engagés à accompagner les entreprises dans la transformation et la gestion de leurs infrastructures réseau, en garantissant des performances optimales et une sécurité renforcée.">
							En savoir plus
						</a>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-10.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Gestion des Projets</h5>

						<a class="service-block_three-learn" href="#" data-service="Chef de Projets" data-description="Nos chefs de projets expérimentés jouent un rôle clé dans la réussite des initiatives stratégiques et opérationnelles de nos clients.
														Nous offrons des services de gestion de projets adaptés à vos besoins, notamment :
														Planification et coordination : Élaboration de plans de projet détaillés, gestion des ressources et suivi des délais pour garantir une exécution fluide et efficace.
														Gestion des parties prenantes : Coordination entre les équipes internes, les fournisseurs et les partenaires pour assurer une communication transparente et une collaboration optimale.
														Suivi des performances : Mise en place d'indicateurs clés de performance (KPI) et d'outils de reporting pour suivre l’avancement des projets et garantir leur alignement avec les objectifs stratégiques.
														Gestion des risques : Identification, évaluation et atténuation des risques pour minimiser les imprévus et optimiser les résultats.
														Grâce à leur expertise et à leur maîtrise des méthodologies telles que Agile, Scrum, ou Waterfall, nos chefs de projets veillent à ce que chaque initiative soit menée à bien dans les délais impartis,
														tout en respectant les budgets et les exigences de qualité.">
							En savoir plus
						</a>

					</div>
				</div>


				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-8.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Développement Logiciel</h5>
						<a class="service-block_three-learn" href="#" data-service="Développement Logiciel"
							data-description="Nos développeurs expérimentés, spécialisés dans les technologies JavaScript, offrent des solutions complètes pour répondre aux besoins de vos projets de développement logiciel.
														Nous proposons des services couvrant les domaines suivants :
														Développement Front-end : Création d'interfaces utilisateur modernes, intuitives et réactives en utilisant des frameworks et bibliothèques reconnus tels que React.js, Angular, et Vue.js.
														Nos développeurs front-end s’assurent de garantir une expérience utilisateur optimale et conforme aux dernières tendances en matière de design.
														Développement Back-end : Conception et mise en œuvre de systèmes back-end robustes et évolutifs, avec des technologies comme Node.js, Express, et d'autres frameworks adaptés.
														Nos experts s'attachent à assurer des performances élevées, une sécurité renforcée et une intégration fluide avec les bases de données et autres services.
														Développement Full-stack : Des développeurs polyvalents capables de prendre en charge l’ensemble de votre projet, de l'interface utilisateur au back-end,
														en passant par les bases de données. Grâce à leur maîtrise des technologies front-end et back-end, nos full-stack developers garantissent une livraison rapide et cohérente des solutions.
														Expertise en JavaScript : Développement d'applications personnalisées, maintenance de solutions existantes, optimisation des performances et implémentation des meilleures pratiques dans l’ensemble des projets.
														Nos développeurs s'engagent à fournir des solutions sur mesure, adaptées à vos besoins spécifiques, tout en respectant les délais et les exigences de qualité.
														">
							En savoir plus
						</a>

					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_three">
					<div class="service-block_three-inner">
						<span class="service-block_three-icon"><img src="frontend/images/icons/service-9.png"
								alt="" /></span>
						<h5 class="service-block_three-heading">Intelligence Artificielle (IA)</h5>
						<a class="service-block_three-learn" href="#" data-service="Intelligence Artificielle (IA)"
							data-description="Nous offrons une expertise avancée dans le domaine de l’intelligence artificielle pour aider nos clients à tirer parti de cette technologie transformative. Nos services incluent :
												Modèles LLM (Large Language Models) : Développement et personnalisation de modèles de traitement du langage naturel à grande échelle pour répondre aux besoins spécifiques de vos applications.
												Entraînement de modèles d’IA : Collecte et préparation des données, conception des architectures de modèles, et entraînement pour garantir des performances optimales dans divers cas d’utilisation.
												IA générative : Développement de solutions basées sur l'IA générative, telles que la création de contenu, la synthèse de données ou la génération d’images et de textes.
												Intégration avec vos applications : Mise en place d’interfaces permettant d’intégrer des technologies comme ChatGPT directement dans vos applications, pour enrichir vos fonctionnalités et améliorer l’interaction utilisateur.
												Collection et gestion des données : Acquisition, nettoyage et structuration des données nécessaires à l'entraînement des modèles d’IA, tout en respectant les normes éthiques et réglementaires.
												Notre équipe d’experts en IA s’engage à fournir des solutions innovantes et sur mesure, adaptées à vos objectifs stratégiques, tout en s’assurant que les technologies déployées sont robustes, éthiques et performantes.
												">
							En savoir plus
						</a>

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