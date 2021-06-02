@extends('layout.de')
@section('lang', 'de')
@section('title', 'Bewertungen Staffplex')
@section('description', 'Staffplex - Bewertungen')
@section('keywords', 'Staffplex, Bewertungen')

@section('head')
<meta property="og:locale" content="de_DE" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="ru_RU" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Bewertungen - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/otzyvy/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"WebPage","@id":"https://staffplex.de/otzyvy/#webpage","url":"https://staffplex.de/otzyvy/","name":"\u041e\u0442\u0437\u044b\u0432\u044b - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"datePublished":"2020-12-08T10:56:00+00:00","dateModified":"2020-12-08T10:56:00+00:00","breadcrumb":{"@id":"https://staffplex.de/otzyvy/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/otzyvy/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/otzyvy/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://staffplex.de/otzyvy/","url":"https://staffplex.de/otzyvy/","name":"\u041e\u0442\u0437\u044b\u0432\u044b"}}]}]}</script>
	
@endsection

<style>
    .round {
    border-radius: 100%; 
    border: 3px solid rgb(0, 0, 0); 
    box-shadow: 0 0 7px #666;
   }
</style>


@section('EN', '/en/reviews')
@section('RU', '/otzyvy')
@section('DE', '/de/bewertungen')

@section('content')
<!-- BANNER -->
<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <!-- Item 1 -->
        <div class="item">
            <img src="/images/cropped-hero-main.png" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">Bewertungen</h1>
                    
                </div>   
            </div>
        </div>
        
    </div>
 
</div>	

<div class="section bg-gray-light">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h5>Dmitriy</h5>
                    <p>Baumeister
                    </p>
                   
                </div>
                <div class="col-sm-8">
                    <div class="img-subsco">
                        <div class="icon-play-y">
                            <a href="https://www.youtube.com/watch?v=QFPMr_jXthQ" class="popup-youtube"><i style="font-size:20px; padding-top:20px; color:black;" class="fas fa-play-circle">Video-Feedback ansehen</i></a>
                        </div>
                    </div>
                      </div>
                <div class="col-sm-2">
                   <img class="round" src="/images/znimok-ekrana-2020-12-25-141851-e1608900724253.png" />
                </div>
            </div>


            <div style="padding-top:20px;" class="row">
                <div class="col-sm-2">
                    <h5>Sergei</h5>
                    <p>Baumeister
                    </p>
                   
                </div>
                <div class="col-sm-8">
                    <div class="icon-play-y">
                        <a href="https://www.youtube.com/watch?v=S0RKtTFEVgk" class="popup-youtube"><i style="font-size:20px; color:black;" class="fas fa-play-circle">Video-Feedback ansehen</i></a>
                    </div>
                  </div>
                <div class="col-sm-2">
                   <img class="round" src="/images/znimok-ekrana-2020-12-25-141735-e1608900702807.png" />
                </div>
            </div>




        </div>
    </div>
</div>



@endsection