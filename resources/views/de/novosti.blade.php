@extends('layout.de')
@section('lang', 'de')
@section('title', 'Nachrichten - Staffplex')
@section('description', 'Staffplex - Nachrichten')
@section('keywords', 'Staffplex, Nachrichten')

@section('head')
<meta property="og:locale" content="de_DE" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="ru_RU" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Nachrichten - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/novosti/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":["WebPage","CollectionPage"],"@id":"https://staffplex.de/novosti/#webpage","url":"https://staffplex.de/novosti/","name":"\u041d\u043e\u0432\u043e\u0441\u0442\u0438 - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"datePublished":"2020-12-07T09:12:41+00:00","dateModified":"2020-12-07T09:12:41+00:00","breadcrumb":{"@id":"https://staffplex.de/novosti/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/novosti/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/novosti/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://staffplex.de/novosti/","url":"https://staffplex.de/novosti/","name":"\u041d\u043e\u0432\u043e\u0441\u0442\u0438"}}]}]}</script>
	
@endsection

@section('EN', '/en/news')
@section('RU', '/novosti')
@section('DE', '/de/nachrichten')

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
                    <h1 class="caption-heading text-white">Wer darf während einer Pandemie nach Deutschland einreisen?</h1>
                    
                </div>   
            </div>
        </div>
        
    </div>
 
</div>	

<div class="section bg-gray-light">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Wer darf während einer Pandemie nach Deutschland einreisen?</h2>
                    <p>Was bedeuten die EU-Reisebeschränkungen während des Coronavirus-Sturzes für Inhaber von Studenten- oder Arbeitsvisa?  Laut DW betrifft das europaweite Einreiseverbot aufgrund von Maßnahmen zur…

                    </p>
                    <a style="color:blue;" href="#">Weiterlesen </a>
                </div>
                <div class="col">
                    <img width="100%" src="/images/news_20200518_142029_1589800829.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>



@endsection