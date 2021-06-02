@extends('layout.en')
@section('lang', 'en')
@section('title', 'For the employer - Staffplex')
@section('description', 'For the employer - Staffplex')
@section('keywords', 'For the employer - Staffplex, employer, Staffplex')

@section('head')
<meta property="og:locale" content="en_GB" />
	<meta property="og:locale:alternate" content="ru_RU" />
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

@section('EN', '/en/for-the-employer')
@section('RU', '/dlya-rabotodatelya')
@section('DE', '/de/fuer-den-arbeitgeber')

@section('content')
<style>
  .benefit__icon {
    margin-left: auto;
      margin-right: auto;
      width: 97px;
      height: 97px;
      border-radius: 10px;
      background-color: #0B2466;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-shadow: 0px 32px 54px rgb(37 138 255 / 22%);
      box-shadow: 0px 32px 54px rgb(37 138 255 / 22%);
      padding: 25px;
  }
  .col-sm{
    text-align: center;
  }
    </style>
<!-- BANNER -->
<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <!-- Item 1 -->
        <div class="item">
            <img src="/images/employer.png" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center h-center">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-white">For the employer</h1>
                    
                </div>   
            </div>
        </div>
    </div>
 
</div>	

<div class="section bg-light">
    <div class="content-wrap pt-0">
        <div class="container">
            <h2>Why choose Staffplex Company:</h2>
            <p>"We are experts in construction and construction personnel"</p>
            
           
                <div class="row">
                  <div  class="col-sm">
                    <div class="benefit__icon">
                      <img src="https://staffplex.de/wp-content/uploads/2020/12/coin-icon.svg" alt="<b>САМЫЕ ВЫГОДНЫЕ ЦЕНЫ. </b><br/><br/>Узнав наш прайс - лист вы поймете, что у нас конкурентноспособные цены за услуги.">
                  </div>
                    <h5>THE MOST FAVORABLE PRICES.</h5>
                    <p>Having learned our price list, you will understand that we have competitive prices for services.</p>
                  </div>
                  <div class="col-sm">
                    <div class="benefit__icon">
                      <img src="https://staffplex.de/wp-content/uploads/2020/12/check-all.svg" alt="<b>ОТВЕТСТВЕННЫЕ СОТРУДНИКИ.</b> <br/><br/>Наши специалисты с бухгалтерского, юридического, кадрового отделов досконально знают немецкий рынок и это всегда гарантирует легальную деятельность наших сотрудников на Ваших проектах.">
                  </div>
                    <h5>RESPONSIBLE EMPLOYEES.</h5>
                    <p>Our specialists from the accounting, legal, human resources departments thoroughly know the German market and this always guarantees the legal activity of our employees on your projects.
                    </p>
                  </div>
                  <div class="col-sm">
                    <div class="benefit__icon">
                      <img src="https://staffplex.de/wp-content/uploads/2020/12/search-icon.svg" alt="<b>ЛИЧНЫЙ ОТДЕЛ РЕКРУТАЦИИ. </b><br/><br/>Тщательный и индивидуальный отбор сотрудников на ваш объект.">
                  </div>
                    <h5>PERSONAL RECRUITMENT DEPARTMENT.</h5>
                    <p>Careful and individual selection of employees for your facility.</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                      <div class="benefit__icon">
                        <img src="https://staffplex.de/wp-content/uploads/2020/12/teamwork-icon.svg" alt="<b>БОЛЬШАЯ БАЗА ПРОФЕССИОНАЛОВ.</b> <br/><br/>У нас самая большая база специалистов строителей с Европейскими документами. В нашей базе насчитывается более 33 000 кандидатов.">
                    </div>
                      <h5>LARGE BASE OF PROFESSIONALS.</h5>
                      <p>We have the largest base of builders with European documents. There are over 33,000 candidates in our database.</p>
                    </div>
                    <div class="col-sm">
                      <div class="benefit__icon">
                        <img src="https://staffplex.de/wp-content/uploads/2020/12/check-all.svg" alt="<b>ПОЛНОЕ СОПРОВОЖДЕНИЕ. </b><br/><br/>Вам ненужно будет думать о бытовых проблемах сотрудника. Мы берем на себя все вопросы, начиная с документации, заканчивая выплатой заработной платы каждому сотруднику.">
                    </div>
                      <h5>FULL SUPPORT.</h5>
                      <p>You will not need to think about the everyday problems of the employee. We take care of all issues, from documentation to the payment of wages to each employee.</p>
                    </div>
                    
                  </div>
                </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="content-wrap pt-0">
            <div class="container">
                <h3>"On your side - projects, and on ours - arms".</h2>
                <p>Our experience in this area and work standards allow us to ensure a high level of quality of services that we provide. We screen every job candidate to ensure they are fit and professional. By taking care of each employee, we ensure quick adaptation to the new environment, which contributes to more employee motivation and performance of work at a high level. We accompany employees in the process of legalizing their stay and work in Poland, assuming all formal, legal and organizational obligations. We have a comprehensive approach to each client and select only highly qualified specialists from the European Union. We work in accordance with German law and we are responsible for the execution of all documents. We always accompany employees in the process of their work,we take care of all formal, legal and accounting issues.</p>
                <h4>What our clients say about us:</h4>
                <div class="row">
                    <div class="col-sm">
                      <iframe width="360" height="155" src="https://www.youtube.com/embed/3MfGaIcyLwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <h5>Oleksandr Reicherd</h5>
                      <p>Entrepreneur</p>
                    </div>
                    <div class="col-sm">
                      <iframe width="360" height="155" src="https://www.youtube.com/embed/yMEYWdztwIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <h5>Ivan Wilvert</h5>
                      <p>Entrepreneur</p>
                    </div>
         
                    <div class="col-sm">
                      <iframe width="360" height="155" src="https://www.youtube.com/embed/pgKS3TXgB_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h5>Alik</h5>
                      <p>Construction company owner</p>
                    </div>
                  </div>
                    </div>
            </div>
        </div>


@endsection
