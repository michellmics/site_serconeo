<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- reCaptcha -->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

		<!-- Title -->
        <title>Serconeo Contabilidade - Seu parceiro contábil para decisões inteligentes.</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
	
<!-- Cambio -->
<script>
	fetch('https://api.exchangerate-api.com/v4/latest/BRL') // Usa BRL como moeda base
    .then(response => response.json())
    .then(data => {
        // Taxas de câmbio baseadas no Real (BRL)
        const taxasDeCambio = {
            "Dólar": (1 / data.rates.USD).toFixed(2), // 1 USD em BRL
            "Euro": (1 / data.rates.EUR).toFixed(2), // 1 EUR em BRL
            "Libra Esterlina": (1 / data.rates.GBP).toFixed(2) // 1 GBP em BRL
            
        };

        console.log('Valores em Reais:');
        console.log(taxasDeCambio);
        
        // Atualiza o DOM com as taxas de câmbio
        document.getElementById('taxas-cambio').innerHTML = `
            <p>Dólar: R$ ${taxasDeCambio["Dólar"]}</p>
            <p>Euro: R$ ${taxasDeCambio["Euro"]}</p>
            <p>Libra: R$ ${taxasDeCambio["Libra Esterlina"]}</p>
            
        `;
    })
    .catch(error => console.error('Erro ao buscar taxas de câmbio:', error));

</script>


		<!-- Preloader -->
		<div class="preloader">
		    <div class="loader">
		        <div class="loader-outter"></div>
		        <div class="loader-inner"></div>

		        <div class="indicator"> 
		            <!-- Substitua este SVG pelo seu novo ícone -->
		            <svg width="50px" height="50px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
		                <circle cx="50" cy="50" r="45" stroke="#000" stroke-width="5" fill="none" />
		                <circle cx="50" cy="50" r="40" stroke="#3498db" stroke-width="5" fill="none" />
		            </svg>
		        </div>
		    </div>
		</div>
		<!-- End Preloader -->

		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="https://maps.app.goo.gl/1fPQa7EzagpK3gs39" target="_blank">Rua Brigadeiro Franco,  4171, Rebouças - Curitiba - PR</a></li>
								<!-- <li><a href="#">Serviços</a></li> -->
								<!-- <li><a href="#">Contact</a></li> -->
								<!-- <li><a href="#">FAQ</a></li> -->
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+55 (41) 3044-6382</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:contato@serconeo.com.br">contato@serconeo.com.br</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="#slider"><img src="img/logo_serconeo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="#slider">Inicio</a></li>
											<li><a href="#why_choose">A empresa </a></li>
											<li><a href="#services">Serviços </a></li>
											<li><a href="#appointment">Contato </a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="https://www.serconeo.com.br/webmail" target="_blank" class="btn">intranet</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section id="slider" class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Enquanto você está focado com os <span>negócios</span>, nós cuidamos da conformidade legal</h1>
									<p> Mantendo a documentação da sua empresa sempre em ordem e atualizada. </p>
									<div class="button">
										<a href="#appointment" class="btn">Entre em contato</a>
										<a href="#services" class="btn primary">Leia Mais</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
							<div class="text">
									<h1>Sempre mantendo o cliente atualizado, em relação aos acontecimentos no <span>"mundo contábil"</span></h1>
									<p> Munida de profissionais que acompanham as evuloções, através de cursos, palestras, leitura, e muita troca de idéias com os bons profissionais. </p>
									<div class="button">
										<a href="#appointment" class="btn">Entre em contato</a>
										<a href="#services" class="btn primary">Leia Mais</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->

			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section id="schedule" class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa icofont-chart-line"></i>
									</div>
									<div class="single-content">
										<span>Cotações</span>
										<h4>Moedas Estrangeiras</h4>
										<div id="taxas-cambio"></div>
										 <!--  <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p> -->
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Contatos</span>
										<h4>E-mail e Telefones</h4>
										<p>+55 (41) 3044-6383 +55 (41) 3044-6382</p> <p>E-mail: contato@serconeo.com.br</p>
										<a href="#appointment">Leia Mais<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Expediente</span>
										<h4>Horário de atendimento</h4>
										<ul class="time-sidual">
											<li class="day">Segunda-Feira <span>8.00-18.00</span></li>
											<li class="day">Terça-Feira <span>8.00-18.00</span></li>
											<li class="day">Quarta-Feira <span>8.00-18.00</span></li>
											<li class="day">Quinta-Feira <span>8.00-18.00</span></li>
											<li class="day">Sexta-Feira <span>8.00-18.00</span></li>
										</ul>
										<!-- <a href="#">Leia Mais<i class="fa fa-long-arrow-right"></i></a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section id="Feautes_section" class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Uma grande parceria para um resultado de sucesso</h2>
							<img src="img/section-img.png" alt="#">
							<p>Descubra os passos essenciais para alcançar o sucesso e conte com nosso apoio especializado em cada etapa do seu percurso.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-briefcase"></i>
							</div>
							<h3>Planejamento Financeiro</h3>
							<p>Entender a saúde financeira do seu negócio. Analisamos suas necessidades e objetivos para criar uma estratégia financeira personalizada.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Contabilidade de Precisão</h3>
							<p>Garantimos registros contábeis exatos, gerenciamento de tributos e compliance, fornecendo uma base sólida para o sucesso do seu negócio.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-chart-pie-alt"></i>
							</div>
							<h3>Crescimento e Controle</h3>
							<p>Ajudamos você a monitorar e ajustar o desempenho, garantindo que sua empresa continue crescendo de forma sustentável.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
			
		<!-- Start Why choose -->
		<section id="why_choose" class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>A Empresa</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nossa política de qualidade é prestar serviços aos nossos clientes, visando satisfazer e superar suas necessidades com qualidade e confiabilidade.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>A Serconeo</h3>
							<p>A Serconeo Contabilidade sempre manten-se atualizada e atualizando seus clientes, o que é muito importante, o cliente atualizado também, em relação aos acontecimentos no "mundo contábil", vêm a cada dia sempre munida de profissionais que acompanham as evuloções, através de cursos, palestras, leitura, e muita troca de idéias com os bons profissionais, munida de boas revistas e livros fiscais para atender sempre e melhor, o empresário que busca o sucesso. Independentemente da contratação dos serviços da Serconeo Contabilidade, entre em contato conosco, para conhecer melhor o nosso trablho e os nossos serviços, ou até mesmo para uma troca de idéias, estaremos a disposição para quaisquer esclarecimentos.</p>
							<p><b>Nossa Missão</b> é assegurar o fornecimento de serviços contábeis, com a qualidade necessária, mediante o domínio das leis e tecnologia, prosperando como empresa. </p>
							<p><b>Nosso Objetivo</b> é fornecer informações aos clientes com agilidade e clareza; assegurar a correção das informações; investir em tecnologia; e qualificar profissionais por meio de treinamentos contínuos. </p>
							<!--
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
							-->
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<!--/ <a href="https://www.youtube.com/watch?v=h8hNte6Cej8" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>-->
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section id="all_action" class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Você têm alguma dúvida?</h2>
							<p>Entre em contato conosco, teremos prazer em lhe atender.</p>
							<div class="button">
								<a href="#appointment" class="btn">Mensagem</a>
								<a href="#services" class="btn second">Continue Lendo<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		<!-- Start service -->
		<section id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Disponibilizamos uma ampla gama de serviços para atender às suas necessidades</h2>
							<img src="img/section-img.png" alt="#">
							<p>Incluindo regularização de empresas, assessoria empresarial, gestão de impostos e terceirização da folha de pagamento, sempre com foco em eficiência e conformidade.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-building"></i>
							<h4><a href="service-details.html">Abertura e Encerramento</a></h4>
							<p>Facilitamos o processo de abertura e encerramento da sua empresa com consultoria especializada e suporte em cada etapa. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">Legalização</a></h4>
							<p>Regularização da situação de empresas, associações sem fins lucrativos e igrejas, garantindo conformidade legal e tranquilidade para suas atividades. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-businessman"></i>
							<h4><a href="service-details.html">Assessoria</a></h4>
							<p>Assessoria empresarial completa, com suporte especializado nos departamentos fiscal, de pessoal e contábil. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-chart-line"></i>
							<h4><a href="service-details.html">Imposto de Renda</a></h4>
							<p>Serviços de Imposto de Renda para pessoas físicas e jurídicas, incluindo a elaboração de declarações de espólio. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-money"></i>
							<h4><a href="service-details.html">Folha de Pagamento</a></h4>
							<p>Terceirização da folha de pagamento, proporcionando mais eficiência e redução de custos na gestão de recursos humanos da sua empresa. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-calculator"></i>
							<h4><a href="service-details.html">Tributos & Escrita Fiscal</a></h4>
							<p>Controle e execução de todas as obrigações fiscais. Administração de tributos e suas obrigações acessórias. </p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		

		
		
		<!-- Start Appointment -->
		<section id="appointment" class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Estamos sempre à disposição para lhe auxiliar. Agende uma reunião conosco!</h2>
							<img src="img/section-img.png" alt="#">
							<p>E descubra como podemos ajudar a impulsionar o seu negócio com soluções personalizadas e expertise em contabilidade.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
					<form id="demo-form" class="form" action="process_form.php" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Nome" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
									
										<input name="email" type="email" placeholder="E-mail" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										
										<input name="phone" type="text" placeholder="Telefone" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
							    	<div class="form-group">
							    	    <select name="department" class="form-control" required>
							    	        <option value="" disabled selected>Selecionar departamento</option>
							    	        <option value="Contábil">Contábil</option>
							    	        <option value="Folha de pagamento">Folha de pagamento</option>
							    	        <option value="Fiscal">Fiscal</option>
							    	        <option value="Comércio exterior">Comércio exterior</option>
							    	    </select>
							    	</div>
								</div>
								
							
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Escreva sua mensagem aqui....."></textarea>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="6LcZHF4qAAAAAPFlFjuVLHrKOvpQ9BzC6U_4uqoa"></div>
										<div class="button">
											<button type="submit" class="btn" onclick="onSubmit(event)">Enviar Mensagem</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
								<!--	<p>( entraremos em contato via whatsapp ou e-mail )</p> -->
								</div>
							</div>
						</form>

						<!-- Onde a mensagem de sucesso/erro será exibida -->
						<div id="form-message"></div>
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>

						<!-- Ajax para envio e exibicao do resultado sem load de pag nova -->
						<script>
							document.getElementById('demo-form').addEventListener('submit', function(e) {
							    e.preventDefault(); // Impede o envio tradicional do formulário
							
							    // Verifica o reCAPTCHA
							    var recaptchaResponse = grecaptcha.getResponse();
							    if (recaptchaResponse.length === 0) {
							        document.getElementById('form-message').innerHTML = "Por favor, complete o reCAPTCHA.";
							        return; // Se o reCAPTCHA não foi resolvido, não submeta o formulário
							    }
							
							    var formData = new FormData(this); // Captura todos os dados do formulário
							
							    var xhr = new XMLHttpRequest();
							    xhr.open('POST', this.action, true); // Configura o envio via POST para o arquivo PHP
							
							    xhr.onload = function() {
							        if (xhr.status === 200) {
							            // Exibe a resposta do servidor na página
							            document.getElementById('form-message').innerHTML = xhr.responseText;
							        } else {
							            document.getElementById('form-message').innerHTML = "Houve um erro no envio do formulário.";
							        }
							    };
							
							    xhr.send(formData); // Envia o formulário via AJAX
							});
						</script>


					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.jpg" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		

		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright <?php echo date('Y'); ?>  |  Todos os direitos reservados por <a href="#slider">Serconeo Contabilidade</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

		
		
    </body>
</html>