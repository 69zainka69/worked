<!DOCTYPE html>
<html lang="@yield('lang')">
    
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')"> 
	<link rel="shortcut icon" href="/images/favicon.png">
	<link rel="apple-touch-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/css/solid.css">
	<link rel="stylesheet" type="text/css" href="/css/brands.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	
    <script src="/js/vendor/modernizr.min.js"></script>
    @yield('head')
</head>

<body data-spy="scroll" data-target="#navbar-example">
	<div class="animationload">
		<div class="loader"></div>
	</div>
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
    <div class="header header-1">
		<div class="middlebar d-none d-sm-block position-sticky">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-4 col-md-4">
						<div class="logo">
							<a style="color:#FFD808;" class="fab fa-whatsapp-square" href="tel:+49 151 40418282"> </a>
							<a style="color:#FFD808;" href="https://wa.me/"><div class="fab fa-whatsapp"></div> </a>
							<a style="color:#FFD808;" href="viber://chat?number=%2B4915140418282"><div class="fab fa-viber"></div> </a>
							<a style="color:#FFD808;" href="tel:+49 151 40418282">  	+49 151 40418282  </a>
						</div>
					</div>
					<div class="col-8 col-md-8">
						<div class="contact-info">
					
							
                           
									<a style="color:#FFD808;" href="https://www.facebook.com/staffplexbau"><div class="fab fa-facebook"></div></a>
								
                            
									<a style="color:#FFD808;" href="https://www.instagram.com/staffplex_bau"><div class="fab fa-instagram"></div></a>
							
							<!-- INFO 1 -->
							<div class="rs-icon-1">
								
								<div class="body-content">
									
								</div>
							</div>
							<!-- INFO 2 -->
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg navbar-bg">
			        
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          О компании
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="/o-kompanii">О компании</a>
	          						<a class="dropdown-item" href="/o-kompanii/rabota-v-staffplex">Работа в Staffplex</a>
							    </div>
			                </li>

			                <li class="nav-item">
			                    <a class="nav-link" href="/nashi-vakansii">Наши вакансии</a>
			                </li>

                            <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Услуги
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="/service/izgotovleniya-van-der-elst-visa">Изготовления Van Der Elst visa</a>
	          						
							    </div>
			                </li>
                            <li class="nav-item">
			                    <a class="nav-link" href="/nashi-raboty">Портфолио</a>
			                </li>
							<li class="nav-item">
			                    <a href="/"><img width="150px" height="90px;" src="/images/logo_white.svg" alt="Staffplex" /></a>
			                </li>
							
			                <li class="nav-item">
			                    <a class="nav-link" href="/dlya-rabotodatelya">Для работодателя</a>
			                </li>

							<li class="nav-item">
			                    <a class="nav-link" href="/novosti">Новости</a>
			                </li>

							<li class="nav-item">
			                    <a class="nav-link" href="/otzyvy">Отзывы</a>
			                </li>

			                <li class="nav-item">
			                    <a class="nav-link" href="/kontakty">Контакты</a>
			                </li>

			            </ul>
			        </div>
			       
			    </nav> <!-- Navbar -->
			    
			</div>
		</div>

    </div>
	@if (session('success'))
        <div style="padding-top:80px; z-index:999;" class="alert alert-success" role="alert">

            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
    @yield('content')
	<div id="form-footer"  class="section bg-primary">
    
		<div class="content-wrap py-5">
			<h4 style="text-align:center;" class="text-black">Оставьте свою заявку</h4>
			<div class="container">
	
				<div style="padding-top:50px;" class="row align-items-center cta-block-1">
					<div class="col-sm-12 col-md-12">
						
						<p>Мы получим ваше обращение и предоставим всю необходимую информацию в ближайшее время.</p>
						<form role="form" method="POST" action="{{ route('form.store') }}">
							@csrf
							<div class="form-group">
							  <label for="fullname">ФИО</label>
							  <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Ф.И.О">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
							  </div>
							<div class="form-group">
							  <label for="text">Сообщение</label>
							  <textarea rows="4" cols="50" name="text" id="text" class="form-control"></textarea>
							</div>
							<button style="background-color:#0b2466; color:white;" type="submit" class="btn btn-primary">Оставить заявку</button>
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="footer-item">
							<img src="/images/logo_white.svg" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>Мы помогаем закрыть множество вопросов: качественно отбираем персонал, отвечаем за все оформления и юридические вопросы, по надобности находим жилье возле объектов, предоставляем рабочие автомобили. Заказчик получает готового специалиста у себя на объекте.</p>

							<ul class="list-info my-4">
								<li>
									<div class="info-icon uk21">
										<span class="fas fa-phone-alt"></span>
									</div>
									<div class="info-text uk21"><strong><a style="color:white;" href="tel:+4915140418282">+49 151 40418282</a></strong></div> </li>
								<li>
							</ul>

							<div class="sosmed-icon d-inline-flex">
								<a href="https://www.facebook.com/staffplexbau"><i class="fab fa-facebook"></i></a> 
								<a href="https://www.instagram.com/staffplex_bau/"><i class="fab fa-instagram"></i></a> 
							</div>
						</div>
					</div>	


					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="footer-item">
							<div class="footer-title">
								Навигация
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list">
										<li><a href="/o-kompanii" title="Home">О компании</a></li>
										<li><a href="/nashi-vakansii" title="Pages">Наши вакансии</a></li>
										<li><a href="/novosti" title="Blog">Новости</a></li>
										<li><a href="/nashi-raboty" title="Contact">Портфолио</a></li>
										<li><a href="/politika-konfidenczialnosti" title="Privacy">Политика конфиденциальности</a></li>
									</ul>
								</div>
								
							</div>
															
						</div>
					</div>				

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="footer-item">
							<div style="text-align:center;" class="footer-title">
								Наш офис
							</div>
							<form id="directionform1_b20wn_0" action="https://maps.google.com/maps" method="get" target="_blank" onsubmit="javascript:googlemap1_b20wn_0.DirectionMarkersubmit(this);return false;" class="mapdirform" style="text-align: center; margin-bottom: 10px;">
        
								<input type="hidden" name="daddr" value="51.141631, 17.032730">
								<button  value="Проложить маршрут" class="fas fa-map-marker-alt" type="submit"> ul. Żmigrodska 81-83/405</button>
							   </form>
							<br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10012.806913770153!2d17.032730000000004!3d51.141631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe9903466edad%3A0xb5fe61f00ef2d545!2zxbttaWdyb2R6a2EgODEsIDUxLTExMiBXcm9jxYJhdywg0J_QvtC70YzRidCw!5e0!3m2!1suk!2sua!4v1618762490224!5m2!1suk!2sua" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

						</div>
					</div>

				</div>
				
			</div>
		</div>
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<p class="mt-3 text-center">2021 © “Staffplex”. Все права защищены</p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<script src="/js/vendor/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script src="/js/vendor/owl.carousel.js"></script>
	<script src="/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="/js/vendor/validator.min.js"></script>
	<script src="/js/vendor/form-scripts.js"></script>
	<script src="/js/script.js"></script>

</body>
</html>