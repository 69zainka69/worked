@extends('layout.main')
@section('lang', 'ru')
@section('title', 'Staffplex | Главная')
@section('description', 'Staffplex - найдите свое место работы прямо сейчас')
@section('keywords', 'Staffplex, место работы')

@section('head')
<meta property="og:locale" content="ru_RU" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="de_DE" />
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
}}
</style>


@section('content')

<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
       
        <div class="item">
            <img src="/images/cropped-hero-main.png" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">Найдите свое
                        место работы
                        прямо сейчас</h1>
                  <a href="#form-footer" class="btn btn-primary">Оставить заявку</a> 
                    
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
                <h2 style="text-align:center; padding-bottom:50px;">Кто мы такие и какова наша миссия</h2>
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
                            <p>Алекс Шило, CEO</p>
                            <img class="d-block w-100" src="/images/dsc00744-scaled.jpg" alt="Алекс Шило CEO">
                         
                          </div>
                          <div class="carousel-item">
                           
                            <p>Дмитрий Овчаренко, CEO.</p>
                            <img class="d-block w-100" src="/images/dsc00770-scaled.jpg" alt="Дмитрий Овчаренко, CEO.">
                          </div>
                        </div>
                      </div>
                </div>
              
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="box-image-4 text-black">
                        
                        <div class="body-content">
                            <h4>Компания Staffplex</h4>
                            <p>- это строительный подрядчик, что специализируется на
предоставлении строительных услуг и лизинг персонала.

Мы помогаем закрыть множество вопросов для наших немецких партнеров: качественно отбираем персонал,
отвечаем за все оформления и юридические вопросы, по надобности находим
жилье возле объектов, выплачиваем зарплату сотрудникам, решаем все бытовые вопросы каждого строителя. Заказчик
получает готового специалиста у себя на объекте.</p>
<a href="/o-kompanii" style="background-color:#0b2466; color:white;" class="btn btn-primary btn-navbar d-none d-sm-block">О компании</a>
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
                    <div class="rs-icon-info-3 mb-5">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/shield.svg" alt="Официально">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Официально</h4>
                            <p>Трудоустраиваем по контракту и обеспечиваем всеми необходимыми документами (социальное и медицинское страхование).</p>
                            <div class="firstpoint"></div>
                        </div>
                    </div>
                </div>

                <div style="padding-top:50px;" class="col-sm-12 col-md-4">
                    <div class="rs-icon-info-3 mb-5">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/search-icon.svg" alt="Комфортные условия ">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Комфортные условия</h4>
                            <p>Предоставляем одежду, автомобиль и удобное жилье, недалеко от объекта. Бригадиры и координаторы - русскоязычные.</p>
                            <div class="secondpoint"></div>
                        </div>
                    </div>
                </div>

                <div style="padding-top:100px;" class="col-sm-12 col-md-4">
                    <div class="rs-icon-info-3 mb-5">
                        <div class="iconss">
                            <img src="https://staffplex.de/wp-content/uploads/2020/12/check-all.svg" alt="Своевременные выплаты">
                        </div>
                        <div class="info-text">
                            <h4 class="text-black mb-2">Своевременные выплаты</h4>
                            <p>Выплачиваем заработную плату два раза в месяц, согласно контракту.</p>
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
                        Как начать работать <br><br>в <span style="font-weight:bold; font-size:48px;" class="text-primary">Staffplex</span>?
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
<div class="section bg-overlay-light">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <img src="images/1.png" />
                    
                </div>

                <div class="col-sm-6 col-md-6 pleft">
                    <h4 class="section-heading text-left text-black no-after mb-5">
                        Присоединяйтесь к более чем 15000+ технических специалистов <span class="text-primary">Получайте мгновенное оповещение на свой почтовый ящик</span>
                    </h4>
                    <p>Будьте всегда вкурсе и узнавай первым о новых вакансиях и важных событиях в Staffplex.</p>
                    <form method="POST" action="{{ route('sender.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Подпишись на рассылку</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Подписаться</button>
                      </form>
                    </div>
                   
                </div>

            </div>
            
        </div>
    </div>
</div>

<div class="section bgi-cover-center bg-gray-light">
    <div class="content-wrap">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 offset-md-12">
                    <div class="cta-info">
                        <h2 class="text-primary">1000+ строителей выбирают нас</h2>
                        <p >Мы гарантируем комфортные условия для наших сотрудников.</p>
                    </div>
                    <div style="padding-top:25px;" class="container">
                        <div class="row">
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/sergiy.jpg" width="50" /></span>Сергей строитель</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=kCPDu1eRrWs" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Смотреть видеоотзыв</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/ivan.jpg" width="50" /></span>Иван строитель</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=Qnl3K-zSJnE" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Смотреть видеоотзыв</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div style="background-color: white;" class="card" style="width: 20rem;">
                                <div class="card-body">
                                  <p class="card-title"><span><img class="round" src="/images/znimok-ekrana-2020-12-25-145424-e1608900900551.png" width="50" /></span>Михаил строитель</p>
                                  <div class="img-subsco">
                                    <div class="icon-play-y">
                                        <a href="https://www.youtube.com/watch?v=gXrBZuVVW9Y" class="popup-youtube"><i style="font-size:12px; color:black;" class="fas fa-play-circle">Смотреть видеоотзыв</i></a>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </div>
                        </div>
                       
                      </div>
                     <p style="padding-top:20px;"> <a href="/otzyvy" class="btn btn-primary btn-navbar d-none d-sm-block">Смотреть больше</a></p>
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
                        Наши <span class="text-primary">новости</span>
                    </h4>
                    <p style="text-align:center;">Информация о самых значимых событиях в жизни нашей компании.</p>
                </div>
            </div>

            <div class="row mt-4">
                
                <!-- Item 1 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="/novosti/ukrainczev-vse-chashhe-stali-deportirovat-iz-germanii-prichina-nelegalnaya-rabota">
                                <img src="images/news1.jpg" alt="news1" class="img-fluid">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author">23 Декабря, 2020</span>
                                
                            </div>
                            <div class="title"><a href="/novosti/ukrainczev-vse-chashhe-stali-deportirovat-iz-germanii-prichina-nelegalnaya-rabota">Украинцев все чаще стали депортировать из Германии. Причина — нелегальная работа</a></div>
                            
                            <p>В течение всего 2020 года наблюдается увеличение динамики выезда украинцев в Германию на нелегальную работу за документами, которые дают разрешение…</p>
                            <a style="color:blue;" href="/novosti/ukrainczev-vse-chashhe-stali-deportirovat-iz-germanii-prichina-nelegalnaya-rabota">Читать далее</a>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="/novosti/graniczy">
                                <img src="images/about-us.png" alt="about-us" class="about-us">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author">22 Декабря, 2020</span>
                            </div>
                            <div class="title"><a href="/novosti/graniczy">Границы</a></div>
                            
                            <p>Границы</p>
                            <a style="color:blue;" href="/novosti/graniczy">Читать далее</a>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rs-news-1 mb-1">
                        <div class="media">
                            <a href="/novosti/koronavirus">
                                <img src="images/vido.png" alt="vido" class="img-fluid">
                            </a>
                        </div>
                        <div class="body">
                            <div class="post-meta">
                                <span class="post-author">21 Декабря, 2020</span>
                            </div>
                            <div class="title"><a href="/novosti/koronavirus">Коронавирус</a></div>
                            
                            <p>Информация о коронавирусе...</p>
                            <a style="color:blue;" href="/novosti/koronavirus">Читать далее</a>
                            <div id="form-footer"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection