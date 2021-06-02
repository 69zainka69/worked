@extends('layout.main')
@section('lang', 'ru')
@section('title', 'Staffplex | ЮТУБ')
@section('description', 'Staffplex - ЮТУБ канал')
@section('keywords', 'Staffplex, место работы')

@section('head')
<meta property="og:locale" content="ru_RU" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="de_DE" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Staffplex ЮТУБ" />
	<meta property="og:url" content="https://staffplex.de/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta property="article:modified_time" content="2021-03-29T10:44:58+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"WebPage","@id":"https://staffplex.de/#webpage","url":"https://staffplex.de/","name":"\u0413\u043b\u0430\u0432\u043d\u0430\u044f - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"datePublished":"2020-12-07T08:40:21+00:00","dateModified":"2021-03-29T10:44:58+00:00","breadcrumb":{"@id":"https://staffplex.de/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}}]}]}</script>
	<!-- / Yoast SEO plugin. -->
@endsection

@section('RU', '/')
@section('EN', '/en/home')
@section('DE', '/de/hauptseite')

@section('content')

<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
       
        <div class="item">
            <img src="/images/cropped-hero-main.png" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">ЮТУБ</h1>
                    
                </div>   
            </div>
        </div>
       
    </div>
 
</div>	



<div class="section">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-12 ">
                    <h4 style="text-align:center;" class="section-heading text-black no-after mb-3">
                        Ютуб канал <span style="font-weight:bold; font-size:48px;" class="text-primary">Staffplex</span>
                    </h4>
                    <div >
                    
                                <iframe  height="100%" src="https://www.youtube.com/embed/m6kMdTDvfN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          
                                <iframe height="100%" src="https://www.youtube.com/embed/Qnl3K-zSJnE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           
                          
                                <iframe height="100%"  src="https://www.youtube.com/embed/YpANwAZ6dKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                    </div>
                </div>
             
                   
                </div>
                
            </div>

            
        </div>
    </div>
</div>




@endsection