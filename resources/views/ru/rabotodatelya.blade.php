@extends('layout.main')
@section('lang', 'ru')
@section('title', 'Для работодателя - Staffplex')
@section('description', 'Для работодателя - Staffplex')
@section('keywords', 'Портфолио - Staffplex, Портфолио, Staffplex')

@section('head')
<meta property="og:locale" content="ru_RU" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:locale:alternate" content="de_DE" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Для работодателя - Staffplex" />
	<meta property="og:url" content="https://staffplex.de/dlya-rabotodatelya/" />
	<meta property="og:site_name" content="Staffplex" />
	<meta property="article:modified_time" content="2021-03-29T11:45:39+00:00" />
	<meta property="og:image" content="https://staffplex.de/wp-content/uploads/2020/12/employer.png" />
	<meta property="og:image:width" content="1280" />
	<meta property="og:image:height" content="781" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://staffplex.de/#website","url":"https://staffplex.de/","name":"Staffplex","description":"\u041d\u0430\u0439\u0434\u0438\u0442\u0435 \u0441\u0432\u043e\u0435 \u043c\u0435\u0441\u0442\u043e \u0440\u0430\u0431\u043e\u0442\u044b \u043f\u0440\u044f\u043c\u043e \u0441\u0435\u0439\u0447\u0430\u0441","potentialAction":[{"@type":"SearchAction","target":"https://staffplex.de/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ru-RU"},{"@type":"ImageObject","@id":"https://staffplex.de/dlya-rabotodatelya/#primaryimage","inLanguage":"ru-RU","url":"https://staffplex.de/wp-content/uploads/2020/12/employer.png","width":1280,"height":781},{"@type":"WebPage","@id":"https://staffplex.de/dlya-rabotodatelya/#webpage","url":"https://staffplex.de/dlya-rabotodatelya/","name":"\u0414\u043b\u044f \u0440\u0430\u0431\u043e\u0442\u043e\u0434\u0430\u0442\u0435\u043b\u044f - Staffplex","isPartOf":{"@id":"https://staffplex.de/#website"},"primaryImageOfPage":{"@id":"https://staffplex.de/dlya-rabotodatelya/#primaryimage"},"datePublished":"2020-12-08T10:55:40+00:00","dateModified":"2021-03-29T11:45:39+00:00","breadcrumb":{"@id":"https://staffplex.de/dlya-rabotodatelya/#breadcrumb"},"inLanguage":"ru-RU","potentialAction":[{"@type":"ReadAction","target":["https://staffplex.de/dlya-rabotodatelya/"]}]},{"@type":"BreadcrumbList","@id":"https://staffplex.de/dlya-rabotodatelya/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://staffplex.de/","url":"https://staffplex.de/","name":"\u0413\u043e\u043b\u043e\u0432\u043d\u0430 \u0421\u0442\u043e\u0440\u0456\u043d\u043a\u0430"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://staffplex.de/dlya-rabotodatelya/","url":"https://staffplex.de/dlya-rabotodatelya/","name":"\u0414\u043b\u044f \u0440\u0430\u0431\u043e\u0442\u043e\u0434\u0430\u0442\u0435\u043b\u044f"}}]}]}</script>
	
@endsection



@section('content')
<!-- BANNER -->
<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <!-- Item 1 -->
        <div class="item">
            <img src="/images/employer.png" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">Для работодателя</h1>
                  <a href="#form-footer" class="btn btn-primary">Оставить заявку</a> 
                    
                </div>   
            </div>
        </div>
    </div>
 
</div>	

<div class="section bg-light">
    <div class="content-wrap pt-0">
        <div class="container">
            <h2>Почему стоит выбрать Компанию Staffplex:</h2>
            <p>«Мы являемся экспертами в строительстве и строительном персонале»</p>
            
           
                <div class="row">
                  <div class="col-sm">
                    <p style="font-size:50px;" class="fas fa-search-dollar"></p>
                    <h5>САМЫЕ ВЫГОДНЫЕ ЦЕНЫ.</h5>
                    <p>Узнав наш прайс - лист вы поймете, что у нас конкурентноспособные цены за услуги.</p>
                  </div>
                  <div class="col-sm">
                    <p style="font-size:50px;" class="fas fa-users"></p>
                    <h5>ОТВЕТСТВЕННЫЕ СОТРУДНИКИ.</h5>
                    <p>Наши специалисты с бухгалтерского, юридического, кадрового отделов досконально знают немецкий рынок и это всегда гарантирует легальную деятельность наших сотрудников на Ваших проектах.</p>
                  </div>
                  <div class="col-sm">
                    <p style="font-size:50px;" class="fas fa-user-shield"></p>
                    <h5>ЛИЧНЫЙ ОТДЕЛ РЕКРУТАЦИИ.</h5>
                    <p>Тщательный и индивидуальный отбор сотрудников на ваш объект.</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                      <p style="font-size:50px;" class="fas fa-id-card"></p>
                      <h5>БОЛЬШАЯ БАЗА ПРОФЕССИОНАЛОВ.</h5>
                      <p>У нас самая большая база специалистов строителей с Европейскими документами. В нашей базе насчитывается более 33 000 кандидатов.</p>
                    </div>
                    <div class="col-sm">
                      <p style="font-size:50px;" class="fas fa-file"></p>
                      <h5>ПОЛНОЕ СОПРОВОЖДЕНИЕ.</h5>
                      <p>ам ненужно будет думать о бытовых проблемах сотрудника. Мы берем на себя все вопросы, начиная с документации, заканчивая выплатой заработной платы каждому сотруднику.</p>
                    </div>
                    
                  </div>
                </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="content-wrap pt-0">
            <div class="container">
                <h3>«С вашей стороны - проекты, а с нашей - руки». 📞+49 175 7094365 What`s app / viber</h2>
                <p>Наш опыт в этой сфере и стандарты работы позволяют обеспечивать высокий уровень качества услуг, которые мы предоставляем. Мы проверяем каждого кандидата на рабочее место, чтобы убедиться в его пригодности и профессионализме. Благодаря заботе о каждом сотруднике, мы обеспечиваем быструю адаптацию к новой среде, что способствует большей мотивации сотрудников и выполнение работы на высоком уровне. Мы сопровождаем сотрудников в процессе легализации их пребывания и работы в Германии , принимая на себя все формальные, юридические и организационные обязательства. Мы комплексно подходим к каждому клиенту и подбираем лишь высококвалифицированных специалистов с Европейского Союза. Мы работаем в соответствии с Немецким законодательством и ответственно относимся к оформлению всех документов. Мы всегда сопровождаем сотрудников в процессе их работы, берем на себя решение всех формальных, юридических и бухгалтерских вопросов. Свяжитесь с нами : +49 175 7094365 What`s app / viber</p>
                <h4>Что говорят о нас наши клиенты:</h4>
                <div class="row">
                    <div class="col-sm">
                        <iframe width="360" height="155" src="https://www.youtube.com/embed/9NogNi22SpU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h5>Александр Рейхерд</h5>
                      <p>Предприниматель</p>
                    </div>
                    <div class="col-sm">
                        <iframe width="360" height="155" src="https://www.youtube.com/embed/7GfxDLAmFOM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h5>Иван Вильверт</h5>
                      <p>Предприниматель</p>
                    </div>
                    <div class="col-sm">
                        <iframe width="360" height="155" src="https://www.youtube.com/embed/YJWSs42q43k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h5>Юрий Мусс</h5>
                      <p>Предприниматель</p>
                    </div>
                    <div class="col-sm">
                        <iframe width="360" height="155" src="https://www.youtube.com/embed/ToaMV5BZ6R8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         <h5>Алик</h5>
                      <p>Владелец строительной компании</p>
                    </div>
                  </div>
                    </div>
            </div>
        </div>


@endsection
