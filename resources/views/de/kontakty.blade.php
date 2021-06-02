@extends('layout.de')
@section('lang', 'de')
@section('title', 'Kontakte - Staffplex')
@section('description', 'Staffplex - Kontakte')
@section('keywords', 'Staffplex, Kontakte')

@section('head')
<meta property="og:locale" content="de_DE" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="ru_RU" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Kontakte - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/kontakty/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta property="article:modified_time" content="2020-12-25T14:58:04+00:00" />
	<meta property="og:image" content="https://staffplex.de/wp-content/uploads/2020/12/contact-us-bg.jpg" />
	<meta property="og:image:width" content="1920" />
	<meta property="og:image:height" content="1080" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"ImageObject","@id":"https://staffplex.de/kontakty/#primaryimage","inLanguage":"ru-RU","url":"https://staffplex.de/wp-content/uploads/2020/12/contact-us-bg.jpg","contentUrl":"https://staffplex.de/wp-content/uploads/2020/12/contact-us-bg.jpg","width":1920,"height":1080},{"@type":"WebPage","@id":"https://staffplex.de/kontakty/#webpage","url":"https://staffplex.de/kontakty/","name":"\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u044b - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"primaryImageOfPage":{"@id":"https://staffplex.de/kontakty/#primaryimage"},"datePublished":"2020-12-08T10:56:31+00:00","dateModified":"2020-12-25T14:58:04+00:00","breadcrumb":{"@id":"https://staffplex.de/kontakty/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/kontakty/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/kontakty/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://staffplex.de/kontakty/","url":"https://staffplex.de/kontakty/","name":"\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u044b"}}]}]}</script>
	<!-- / Yoast SEO plugin. -->
@endsection

@section('EN', '/en/contacts')
@section('RU', '/kontakty')
@section('DE', '/de/kontakte')

@section('content')
<!-- BANNER -->
<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <!-- Item 1 -->
        <div class="item">
            <img src="/images/contact-us-bg.jpg" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">Kontakte Staffplex</h1>
                    
                </div>   
            </div>
        </div>
        
    </div>
 
</div>	

<div class="section bg-gray-light">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
               
                <div class="col-sm-5">
                <h2>Kontaktiere uns</h2>
                <p>Wir laden Sie zur Zusammenarbeit ein. Kontaktieren Sie uns, wir beantworten gerne Ihre Fragen.</p> 
                <form role="form" method="POST" action="">
                    @csrf
                    <div class="form-group">
                      <label for="fullname">Vollständiger Name</label>
                      <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Vollständiger Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                      </div>
                    <div class="form-group">
                      <label for="text">Ihre Nachricht...</label>
                      <textarea rows="4" cols="50" name="text" id="text" class="form-control"></textarea>
                    </div>
                    <button style="background-color:rgb(6 184 11);" type="submit" class="btn btn-primary">Reichen Sie Ihre Bewerbung ein</button>
                  </form>

                </div>

                <div class="col-sm-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10012.806913770153!2d17.032730000000004!3d51.141631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe9903466edad%3A0xb5fe61f00ef2d545!2zxbttaWdyb2R6a2EgODEsIDUxLTExMiBXcm9jxYJhdywg0J_QvtC70YzRidCw!5e0!3m2!1suk!2sua!4v1618762490224!5m2!1suk!2sua" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="row">
                    <div class="col">
                        <a href="mailto:info@staffplex.de"> <p style="font-size:20px;" class="fas fa-envelope-open-text"> info@staffplex.de</p></a>
                    </div>
                    <div class="col">
                        <a href="tel:+49 151 40418282"> <p style="font-size:20px;" class="fas fa-phone"> +49 151 40418282</p></a>
                    </div>
                    <div class="col">
                        <a href="#"> <p style="font-size:20px;" class="fas fa-home">  ul. Żmigrodska 81-83/405</p></a>
                    </div>
                   
                </div>
                <form id="directionform1_b20wn_0" action="https://maps.google.com/maps" method="get" target="_blank" onsubmit="javascript:googlemap1_b20wn_0.DirectionMarkersubmit(this);return false;" class="mapdirform" style="text-align: center; margin-bottom: 10px;">
        
                    <input type="hidden" name="daddr" value="51.141631, 17.032730">
                    <button  value="Проложить маршрут" class="fas fa-map-marker-alt" type="submit">Anweisungen bekommen</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection