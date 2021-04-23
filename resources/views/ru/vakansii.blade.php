@extends('layout.main')
@section('lang', 'ru')
@section('title', 'Вакансии в Staffplex')
@section('description', 'Вакансии в Staffplex Мы предоставляем широкий спектор вакансий с хорошей оплатой.')
@section('keywords', 'Вакансии в Staffplex, вакансии')

@section('head')
<meta property="og:locale" content="ru_RU" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="de_DE" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Наши вакансии - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/nashi-vakansii/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta property="article:modified_time" content="2020-12-21T12:51:53+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"WebPage","@id":"https://staffplex.de/nashi-vakansii/#webpage","url":"https://staffplex.de/nashi-vakansii/","name":"\u041d\u0430\u0448\u0438 \u0432\u0430\u043a\u0430\u043d\u0441\u0438\u0438 - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"datePublished":"2020-12-08T10:34:24+00:00","dateModified":"2020-12-21T12:51:53+00:00","breadcrumb":{"@id":"https://staffplex.de/nashi-vakansii/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/nashi-vakansii/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/nashi-vakansii/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://staffplex.de/nashi-vakansii/","url":"https://staffplex.de/nashi-vakansii/","name":"\u041d\u0430\u0448\u0438 \u0432\u0430\u043a\u0430\u043d\u0441\u0438\u0438"}}]}]}</script>
	
@endsection



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
                    <h1 class="caption-heading text-white">Наши вакансии</h1>
                    <a href="#form-footer" class="btn btn-primary">Оставить заявку</a>
                </div>   
            </div>
        </div>
    </div>
</div>	


<div class="section bg-gray-light">
    <div class="content-wrap">
        <div class="container">
            <h2 style="text-align:center;">Вакансии в Staffplex</h2>
            <div class="row">

                    
                    <div class="card col" style="width: 18rem;">
                        <img class="card-img-top" src="/images/methode-times-prod-web-bin-15e4b8c0-442e-11e6-a45d-8299bb50a973.jpg" alt="Специалист каменщик-клинкер">
                        <div class="card-body">
                          <h5 class="card-title">Специалист каменщик-клинкер</h5>
                          <p class="card-text">
                        <span class="fas fa-map-marker-alt">
                            Аугустдорф, Северный Рейн-Вестфалия
                        </span><br>
                        <span class="fas fa-money-bill-wave">
                            30 € за м2
                        </span><br>
                        <span class="fas fa-home">
                            Проживание включено (150 евро/мес)
                        </span>
                        </p>
                          <a href="/vacancy/speczialist-kamenshhik-klinker" class="btn btn-primary">Подробнее</a>
                        </div>
                      </div>


                      <div class="card col" style="width: 18rem;">
                        <img class="card-img-top" src="/images/bg.png" alt="Специалист по фасадным работам">
                        <div class="card-body">
                          <h5 class="card-title">Специалист по фасадным работам</h5>
                          <p class="card-text">
                        <span class="fas fa-map-marker-alt">
                            Федеральная земля Саксония, Шпелле
                        </span><br>
                        <span class="fas fa-money-bill-wave">
                            12 € в час
                        </span><br>
                        <span class="fas fa-home">
                            Проживание не включено
                        </span>
                        </p>
                          <a href="/vacancy/speczialist-po-fasadnym-rabotam" class="btn btn-primary">Подробнее</a>
                        </div>
                      </div>

                      <div class="card col" style="width: 18rem;">
                        <img class="card-img-top" src="/images/s16.jpg" alt="Специалист маляр-штукатур">
                        <div class="card-body">
                          <h5 class="card-title">Специалист маляр-штукатур</h5>
                          <p class="card-text">
                        <span class="fas fa-map-marker-alt">
                            Федеральная земля Саксония, Шпелле
                        </span><br>
                        <span class="fas fa-money-bill-wave">
                            12 € в час
                        </span><br>
                        <span class="fas fa-home">
                            Проживание не включено
                        </span>
                        </p>
                          <a href="/vacancy/speczialist-po-fasadnym-rabotam" class="btn btn-primary">Подробнее</a>
                        </div>
                      </div>

                </div>

                <div style="padding-top:30px;" class="row">
                <div class="card col" style="width: 18rem;">
                    <img class="card-img-top" src="/images/glazurnik-zlecenia-oferty-a.jpg" alt="Специалист плиточник">
                    <div class="card-body">
                      <h5 class="card-title">Специалист плиточник</h5>
                      <p class="card-text">
                    <span class="fas fa-map-marker-alt">
                        Achim, Федеральная земля Саксония
                    </span><br>
                    <span class="fas fa-money-bill-wave">
                        15 € за м2
                    </span><br>
                    <span class="fas fa-home">
                        Проживание включено
                    </span>
                    </p>
                      <a href="/vacancy/speczialist-plitochnik" class="btn btn-primary">Подробнее</a>
                    </div>
                  </div>

                  <div class="card col" style="width: 18rem;">
                    <img class="card-img-top" src="/images/s12.jpg" alt="Сециалист каменщик-силикатных блоков">
                    <div class="card-body">
                      <h5 class="card-title">Сециалист каменщик-силикатных блоков</h5>
                      <p class="card-text">
                    <span class="fas fa-map-marker-alt">
                        Гамбург, Федеральная земля Гамбург
                    </span><br>
                    <span class="fas fa-money-bill-wave">
                        14 € за м2
                    </span><br>
                    <span class="fas fa-home">
                        Проживание включено
                    </span>
                    </p>
                      <a href="/vacancy/speczialist-kamenshhik-silikatnyh-blokov" class="btn btn-primary">Подробнее</a>
                    </div>
                  </div>

                  <div class="card col" style="width: 18rem;">
                    <img class="card-img-top" src="/images/santehnik.jpg" alt="Специалист сантехник">
                    <div class="card-body">
                      <h5 class="card-title">Специалист сантехник</h5>
                      <p class="card-text">
                    <span class="fas fa-map-marker-alt">
                        Люнне, Федеральная земля Саксония
                    </span><br>
                    <span class="fas fa-money-bill-wave">
                        12 € в час
                    </span><br>
                    <span class="fas fa-home">
                        Проживание включено
                    </span>
                    </p>
                      <a href="/vacancy/speczialist-santehnik" class="btn btn-primary">Подробнее</a>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
    
  @endsection