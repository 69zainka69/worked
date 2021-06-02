<!DOCTYPE html>
<html lang="@yield('lang')">
    
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-185771786-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-185771786-1');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')"> 
	<link rel="shortcut icon" href="/images/favicon.png">
	<link rel="apple-touch-icon" href="/images/favicon.png">
   
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" ><link rel="stylesheet" type="text/css" href="/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/css/brands.css">
	<link rel="stylesheet" type="text/css" href="/css/solid.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/css/style.css" />  -->
	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b16941588/crm/site_button/loader_4_cijd5d.js');
</script>
    <script src="/js/vendor/modernizr.min.js"></script>
    @yield('head')
</head>
<style>
	.cd-top {
  display: inline-block;
  height: 40px;
  width: 40px;
  position: fixed;
  bottom: 50px;
  right: 10px;
  z-index: 999;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  background: #082265 url("../images/cd-top-arrow.svg") no-repeat center 50%;
  visibility: hidden;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
  -moz-transition: opacity .3s 0s, visibility 0s .3s;
  transition: opacity .3s 0s, visibility 0s .3s;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  border-radius: 20px; }
  .cd-top:hover {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    -webkit-transition: opacity .3s 0s, visibility 0s 0s;
    -moz-transition: opacity .3s 0s, visibility 0s 0s;
    transition: opacity .3s 0s, visibility 0s 0s; }
  .cd-top.cd-is-visible {
    visibility: visible;
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100); }
  .cd-top.cd-fade-out {
    opacity: 0.5;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
    filter: alpha(opacity=50); }
  }
  
  
  .nav-item{
	flex-basis: auto;
    flex-grow: 1;
  }
  .navbar-nav{
	display: flex;
  }
  .navbar-nav{padding-left:10% !important;}
  
</style>

<body data-spy="scroll" data-target="#navbar-example">
	<div class="animationload">
		<div class="loader"></div>
	</div>
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
	<div class="header header-1">
		<div style="background: #082265;" class="middlebar  d-sm-block fixed-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3 col-md-3">
						<div class="logo">
							<div style="display:flex;" class="rs">
								<div class="rs">
									<a style="color:white;" href="tel:+49 151 40418282"><img class="mobileline"  src="/images/phone.JPG" /></a>
								</div>
							
								<div class="rs">
									<div class="rs">
										<a style="color:white;" href="https://wa.me/"><img class="mobileline"  src="/images/watsup.JPG" /></a>
									</div>
								</div>
								<div class="rs">
									<div class="rs">
										<a style="color:white;" href="viber://chat?number=%2B4915140418282"><img class="mobileline"  src="/images/wiber.JPG" /></a>
									</div>
								</div>
								<div class="body-content">
									<a class="mobileicons" style="color:white;" href="tel:+49 151 40418282">
                                        <span style="font-size: 12px;">+49 151 40418282</span>
                                    </a>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-9 col-md-9">
						<div class="contact-info ">
					
                            <div class="rs">
								<div class="rs">
									<a style="color:white;" href="https://www.facebook.com/Staffplex-%D1%82%D1%80%D1%83%D0%B4%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE-%D0%B2-%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D0%B8-104460405145264"><img  class="mobileline" src="/images/fb.JPG" /></a>
								</div>
							</div>
							<div class="rs">
								<div class="icons mobile-line">
									<a style="color:white;" href="https://www.youtube.com/channel/UCBSj0rS2QX3b-kcnfkGVqtw"><img  class="mobileline" src="/images/youtube.JPG" /></a>
								</div>
							</div>
                            <div class="rs">
								<div class="rs">
									<a class="mobile-line" style="color:white;" href="https://www.instagram.com/staffplex_de"><img  class="mobileline" src="/images/insta.JPG" /></a>
								</div>
							</div>
							<select style="background:#082265; color:white; border:none;" onchange="window.location.href = this.options[this.selectedIndex].value">
								<option value="@yield('DE')">DE</option>
								<option value="@yield('RU')">RU</option>
								<option value="@yield('EN')">EN</option>
								
							</select>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<nav style="top:70px; !important margin-left:auto; margin-right:ato;" class="navbar navbar-expand-md navbar-white fixed-top bg-white">
			<a class="nav-link mobilelogos" href="/"><span><img width="150" src="/images/logo.png" alt="Staffplex"></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"><img src="/images/menu.png" /></span>
			</button>
			<div style="padding-left: auto; padding-right:auto;" class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Über das Unternehmen
						</a>
						<div style="left:7%; bottom: -135%;" class="dropdown-menu">
							<a class="dropdown-item" href="/de/ueber-das-unternehmen">Über das Unternehmen</a>
							  <a class="dropdown-item" href="/de/ueber-das-unternehmen/arbeiten-sie-bei-staffplex">Arbeiten bei Staffplex</a>
						</div>
					</li>

				<li class="nav-item active">
				  <a class="nav-link" href="/de/unsere-offenen-stellen">Unsere offenen Stellen</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dienstleistungen
					</a>
					<div style="bottom: -69px;" class="dropdown-menu">
						<a class="dropdown-item" href="/de/service/hergestellt-von-van-der-elst-visum">Hergestellt von Van Der Elst Visum</a>
						  
					</div>
				</li>

				<li class="nav-item active">
				  <a class="nav-link" href="/de/youtube">Youtube</a>
				</li>
				<a class="nav-link biglogos" href="/"><span><img width="150" src="/images/logo.png" alt="Staffplex"></span></a>
				<li class="nav-item active">
					<a class="nav-link" href="/de/fuer-den-arbeitgeber">Für den Arbeitgeber</a>
				  </li>
				 
				  <li class="nav-item active">
					<a class="nav-link" href="/de/nachrichten">Nachrichten</a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="/de/bewertungen">Bewertungen</a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="/de/kontakte">Kontakte</a>
				  </li>
				 
			  </ul>
		  </nav>

    </div>
	@if (session('success'))
        <div class="alert alert-success" role="alert">

            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
		 
    @yield('content')
	<!-- <div id="form-footer" style="background:#F7F8FA;" class="section">
    
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
	</div> -->

	<!-- FOOTER SECTION -->
	<div style="background-color:#082265;" class="footer">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="footer-item">
							<img width="250" src="/images/logo_white.png" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>Wir helfen bei der Schließung vieler Probleme: Wir wählen Personal mit hoher Qualität aus, wir sind für alle Registrierungen und rechtlichen Probleme verantwortlich. Falls erforderlich, finden wir eine Unterkunft in der Nähe der Einrichtungen und stellen funktionierende Autos zur Verfügung. Der Kunde erhält in seiner Einrichtung einen vorgefertigten Spezialisten.</p>

							<ul class="list-info my-4">
								<li>
									<div class="info-icon uk21">
										<span class="fas fa-phone-alt"></span>
									</div>
									<div class="info-text uk21"><strong><a style="color:white;" href="tel:+4915140418282">+49 151 40418282</a></strong></div> </li>
								<li>
							</ul>

							<div class="sosmed-icon d-inline-flex">
								<a style="color:white;" href="https://www.facebook.com/Staffplex-%D1%82%D1%80%D1%83%D0%B4%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE-%D0%B2-%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D0%B8-104460405145264"><i class="fab fa-facebook"></i></a> 
								<a style="color:white;" href="https://www.youtube.com/channel/UCBSj0rS2QX3b-kcnfkGVqtw"><i class="fab fa-youtube"></i></a>
								<a style="color:white;" href="https://www.instagram.com/staffplex_de"><i class="fab fa-instagram"></i></a> 
							</div>
						</div>
					</div>	


					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="footer-item">
							<div style="color:white;" class="footer-title">
								Navigation
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list">
										<li><a href="/de/ueber-das-unternehmen" title="Home">Über das Unternehmen</a></li>
										<li><a href="/de/unsere-offenen-stellen" title="Pages">Unsere offenen Stellen</a></li>
										<li><a href="/de/nachrichten" title="Blog">Nachrichten</a></li>
										<li><a href="/de/youtube" title="Blog">youtube</a></li>
										<li><a href="/de/politika-konfidenczialnosti" title="Privacy">Datenschutz-Bestimmungen</a></li>
										<li><a  target="_blank" href="/docs/Cetryfikat_Agencja_Pracy.pdf" title="Privacy">Zertifikat</a></li>
										<li><a  target="_blank" href="/docs/ERLAUBNIS.pdf" title="Privacy">ERLAUBNIS</a></li>
										
									</ul>
								</div>
								
							</div>
															
						</div>
					</div>				

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="footer-item">
							<div style="text-align:center; color:white;" class="footer-title">
								Unser Büro
							</div>
							<form id="directionform1_b20wn_0" action="https://maps.google.com/maps" method="get" target="_blank" onsubmit="javascript:googlemap1_b20wn_0.DirectionMarkersubmit(this);return false;" class="mapdirform" style="text-align: center; margin-bottom: 10px;">
        
								<input type="hidden" name="daddr" value="51.141631, 17.032730">
								<button style="color: #ffffff;
								background: #082265;"  value="Проложить маршрут" class="fas fa-map-marker-alt" type="submit"> ul. Żmigrodska 81-83/405</button>
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
						<p class="mt-3 text-center">2021 © “Staffplex”. Alle Rechte vorbehalten</p> 
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