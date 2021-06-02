@extends('layout.de')
@section('lang', 'de')
@section('title', 'Staffplex | Hauptseite')
@section('description', 'Staffplex - найдите свое место работы прямо сейчас')
@section('keywords', 'Staffplex, место работы')

@section('head')
<meta property="og:locale" content="de_DE" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Главная - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta property="article:modified_time" content="2021-03-29T10:44:58+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"WebPage","@id":"https://staffplex.de/#webpage","url":"https://staffplex.de/","name":"\u0413\u043b\u0430\u0432\u043d\u0430\u044f - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"datePublished":"2020-12-07T08:40:21+00:00","dateModified":"2021-03-29T10:44:58+00:00","breadcrumb":{"@id":"https://staffplex.de/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}}]}]}</script>
	<!-- / Yoast SEO plugin. -->
@endsection
<style>

    .round {
    border-radius: 100px; 
    border: 3px solid rgb(0, 0, 0); 
    box-shadow: 0 0 7px #666;
   }
.sliderback {
   
    background-image: url(/images/btttt.png);
    height: 175px;
    width: 160px;
    display: block;
    position: absolute;
    bottom: -40px;
    left: -40px
}
.iconss{
    border: 2px solid #0b2466;
    border-radius: 20%;
    background-color: #0b2466;
    width: 100px;
    height: 90px;
    text-align: center;
}
.iconss img{
    padding-top:20px;
}
@media (min-width: 768px) {  
.firstpoint{
    background-image: url(/images/first.png);
    height: 165px;
    width: 230px;
    display: block;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 80px;
    left: 140px;
}
.secondpoint{
    background-image: url(/images/second.png);
    height: 165px;
    width: 230px;
    display: block;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 60px;
    left: 140px;
}

}
@media (max-width: 994px) { 
.nones{
    display: none;
}}
</style>
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
                    <h1 class="caption-heading text-white">Finden Sie jetzt Ihren
                        Arbeitsplatz</h1>
                    
                </div>   
            </div>
        </div>
       
    </div>
 
</div>	

<!-- WHY -->
<div class="section bg-light">
    <div class="content-wrap pt-0">
        <div class="container">
             <div style="padding-top:50px;" class="row overlap-row">
                <h2 style="text-align:center; padding-bottom:50px;">Wer wir sind und was unsere Mission ist</h2>
                <!-- Item 1 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="sliderback"> </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                       
                          <div class="carousel-item active">
                            <p>Alex Shilo CEO.</p>
                            <img class="d-block w-100" src="/images/dsc00744-scaled.jpg" alt="Алекс Шило CEO">
                         
                          </div>
                          <div class="carousel-item">
                           
                            <p>Dmitry Ovcharenko, CEO.</p>
                            <img class="d-block w-100" src="/images/dsc00770-scaled.jpg" alt="Дмитрий Овчаренко, CEO.">
                          </div>
                        </div>
                      </div>
                </div>
              
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="box-image-4 text-black">
                        
                        <div class="body-content">
                            <h4>Staffplex</h4>
                            <p> - ist ein Bauunternehmer, der sich auf
                                Outstaffing-Dienstleistungen spezialisiert hat.
                                
                                Wir helfen bei der Schließung vieler Probleme: Wir wählen hochqualifiziertes Personal aus, sind
                                für alle Registrierungen und rechtlichen Probleme verantwortlich. Falls erforderlich, finden wir eine
                                Unterkunft in der Nähe der Einrichtungen und stellen funktionierende Autos zur Verfügung. Der Kunde
                                erhält in seiner Einrichtung einen vorgefertigten Spezialisten.</p>
<a href="/de/ueber-das-unternehmen" style="background-color:#0b2466; color:white;" class="btn btn-primary btn-navbar d-none d-sm-block">Über das Unternehmen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section bg-gray-light">
    <div class="content-wrap">
        <div class="container">

        

            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <div class="rs-icon-info-3 ">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/shield.svg" alt="Официально">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Offiziell</h4>
                            <p>Wir sind vertraglich angestellt und stellen alle notwendigen Unterlagen zur Verfügung (Sozial- und Krankenversicherung).</p>
                            <div class="firstpoint"></div>
                        </div>
                    </div>
                </div>

                <div style="padding-top:50px;" class="col-sm-12 col-md-4">
                    <div class="rs-icon-info-3 ">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/search-icon.svg" alt="Komfortable Bedingungen ">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Komfortable Bedingungen</h4>
                            <p>Wir bieten Kleidung, ein Auto und komfortable Unterkünfte in der Nähe der Unterkunft. Die Vorarbeiter und Koordinatoren sprechen Russisch.</p>
                            <div class="secondpoint"></div>
                        </div>
                    </div>
                </div>

                <div style="padding-top:100px;" class="col-sm-12 col-md-4">
                    <div class="rs-icon-info-3 ">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/check-all.svg" alt="Rechtzeitige Zahlungen">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Rechtzeitige Zahlungen</h4>
                            <p>Wir zahlen laut Vertrag zweimal im Monat Löhne.</p>
                        </div>
                    </div>
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
                        Wie fange ich  <br><br>an <span style="font-weight:bold; font-size:48px;" class="text-primary">Staffplex</span>?
                    </h4>

                    <div class="img-subsco">
                        <div class="icon-play-yt">
                            <a href="https://www.youtube.com/watch?v=m6kMdTDvfN0" class="popup-youtube"><i class="fas fa-play-circle"></i></a>
                        </div>
                        <img src="/images/work-video-img.png" alt="staffplex video" class="img-fluid">
                    </div>
                </div>
             
                   
                </div>
                
            </div>

            
        </div>
    </div>
</div>

<!-- OUR TESTIMONIALS & PARTNERS -->

<div class="section bgi-cover-center bg-gray-light">
    <div class="content-wrap">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 offset-md-12">
                    <div class="cta-info">
                        <h2 class="text-primary">Über 1000 Bauherren wählen uns</h2>
                        <p >Wir garantieren unseren Mitarbeitern komfortable Bedingungen.</p>
                    </div>
                    <div style="padding-top:25px;" class="container">
                        <div class="row">
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/sergiy.jpg" width="50" /></span>Sergey Baumeister</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=kCPDu1eRrWs" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Video-Feedback ansehen</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/ivan.jpg" width="50" /></span>Ivan Baumeister</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=Qnl3K-zSJnE" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Video-Feedback ansehen</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/znimok-ekrana-2020-12-25-145424-e1608900900551.png" width="50" /></span>Andrey Baumeister</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=gXrBZuVVW9Y" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Video-Feedback ansehen</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                        </div>
                       
                      </div>
                     <p style="padding-top:20px;"> <a href="/de/bewertungen" class="btn btn-primary btn-navbar d-none d-sm-block">Mehr sehen</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- NEWS -->
<div class="section">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h4 class="section-heading text-center text-black no-after mb-5">
                        Nachrichten
                    </h4>
                    <p style="text-align:center;">Informationen zu den wichtigsten Ereignissen im Leben unseres Unternehmens.</p>
                </div>
            </div>

            <div class="row mt-4">
                
                <!-- Item 1 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="#">
                                <img src="/images/news_20200518_142029_1589800829.jpg" alt="news1" class="img-fluid">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author">25 Dezember</span>
                                
                            </div>
                            <div class="title"><a href="#">Wer darf während einer Pandemie nach Deutschland einreisen?</a></div>
                            
                            <p>Was bedeuten die EU-Reisebeschränkungen während des Coronavirus-Sturzes für Inhaber von Studenten- oder Arbeitsvisa?  Laut DW betrifft das europaweite Einreiseverbot aufgrund von Maßnahmen zur…</p>
                            <a style="color:blue;" href="#">
                                Weiterlesen </a>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="#">
                                <img src="/images/s10-scaled.jpg" alt="about-us" class="about-us">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author"></span>
                            </div>
                            <div class="title"><a href="#">Deutsche Arbeitgeber suchen neue Mitarbeiter</a></div>
                            
                            <p>Die Suche nach neuen Mitarbeitern wurde aufgrund des Coronavirus nicht gestoppt. Die Nachfrage nach einigen Spezialitäten ist um 300 Prozent gestiegen. Analysten…</p>
                            <a style="color:blue;" href="#">Weiterlesen</a>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="#">
                                <img src="/images/1588779591_0_0_3086_1736_1920x0_80_0_0_3b9be40a3a69ad20d9bdb838985ba952.jpg" alt="vido" class="img-fluid">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author"></span>
                            </div>
                            <div class="title"><a href="#">Deutschland führt Hard Lockdown bis zum 10. Januar ein</a></div>
                            
                            <p>Ab dem 16. Dezember werden Einzelhandelsgeschäfte in ganz Deutschland nicht mehr funktionieren, mit Ausnahme von Lebensmitteln sind Schulen und Kindergärten…</p>
                            <a style="color:blue;" href="#">Weiterlesen</a>
                            <div id="form-footer"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection