<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Scripts -->
    <script type="text/javascript" src="{{url('assets/site/js/modernizr.js')}}"></script>    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/9712be8772.js"></script>
</head>
<body>
    <!-- ====================================================
    header section -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 header-logo">
                    <br>
                    <a href="index.html"><img src="{{url('assets/site/img/logo.png')}}" alt="" class="img-responsive logo"></a>
                </div>

                <div class="col-md-10">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          
                          <ul class="nav navbar-nav navbar-right">
                            <li><a class="menu active" href="#inicio" >Início</a></li>
                            <li><a class="menu" href="#ciclo">Ciclo de Vida</a></li>
                            <li><a class="menu" href="#processos">Processos</a></li>
                            <li><a class="menu" href="#ferramentas">Ferramentas</a></li>
                            <li><a class="menu" href="#equipe">Equipe</a></li>
                            <li><a class="menu" href="#portfolio">Portfólio</a></li>
                            <li><a class="menu" href="#contato">Contato</a></li>
                            <li><a class="menu" href="{{url('/login')}}"> Login</a></li>
                          </ul>
                        </div><!-- /navbar-collapse -->
                      </div><!-- / .container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header> <!-- end of header area -->

    <section class="slider" id="inicio">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="{{url('assets/site/img/slides/slide-two.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h1>Projeto</h1>
                                <p>Desenvolvimento de Software</p>
                                
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{url('assets/site/img/slides/slide-three.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h2>Protótipo</h2>
                                <p>em desenvolvimento</p>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->

    <!-- section Ciclo de Vida -->
    <section class="about text-center" id="ciclo">
        <div class="container">
            <br>
            <div class="row">
                <h2>Ciclo de Vida</h2>
                <h4>O ciclo de vida utilizado pela Empresa utiliza a abordagem iterativo e incremental. Serão baseados no SCRUM para gestão de projetos, alinhado com boas práticas de metodologias de desenvolvimento como XP( do inglês eXtreming Programming). Para saber mais clique na figura. </h4>
                <div class="col-md-6 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="{{url('assets/site/img/item1.png')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>SC</h1>
                            </div>
                            <h3>SCRUM</h3>
                            <p>Scrum é uma metodologia ágil para gestão e planejamento de projetos de software. No Scrum, os projetos são dividos em ciclos (tipicamente mensais) chamados de Sprints.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{url('assets/site/img/item2.png')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>XP</h1>
                            </div>

                            <h3>Extreme Programing</h3>
                            <p>Programação extrema (do inglês eXtreme Programming), ou simplesmente XP, é uma metodologia ágil para equipes pequenas e médias e que irão desenvolver software com requisitos vagos e em constante mudança.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section><!-- fim section Ciclo de Vida -->

    <br>
    <br>
    <hr>
    
    <!-- Section Processos -->
    <section class="team" id="processos">
        <br>
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Processos</h2>
                    <h4>Conheça os processos utilizados para o desenvolvimento dos projetos.</h4>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Coleta de Dados</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Planejamento</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Codificação</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Feedback do Cliente</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Sprint Review</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Produto Final</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-5">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Fim Section Ferramentas -->

    
    <br>
    <br>
    <hr>
    
    <!-- Section Ferramentas -->
    <section class="team" id="ferramentas">
        <br>
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Ferramentas</h2>
                    <h4>Conheça algumas as ferramentas utilizadas pela equipe para construção de softwares objetivando a produtividade, agilidade e trabalho em grupo</h4>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>LARAVEL</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>XAMPP</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>GIT</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>SUBLIME TEXT 3</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>WHATSAPP</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>TRELLO</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/images.png')}}" alt="member-5">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Fim Section Ferramentas -->

    <br>
    <br>
    <hr>
    
    <!-- Section Equipe -->
    <section class="team" id="equipe">
        <br>
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Equipe</h2>
                    <h4>Conheça a nossa equipe e o papel desenvolvido por cada um.</h4>
                </div>
                <div class="col-md-3 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/marcio.png')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Márcio Diniz</h3>
                        <p>Ger.de Projeto, Desenvolvedor e Coach</p>
                    </div>
                </div>
                <div class="col-md-3 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Jackson Wirley</h3>
                        <p>Analista e Desenvolvedor</p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/jackson.jpg')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-3 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/valerio.jpg')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Valério Rodrigues</h3>
                        <p>Analista e Designer</p>
                    </div>
                </div>
                <div class="col-md-3 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Bárbara Costa</h3>
                        <p>Analista, Desenvolvedora e Testadora</p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/barbara.jpg')}}" alt="member-4">
                    </div>
                </div>
                
            </div>
        </div>
    </section><!-- Fim Section Ferramentas -->

    <br>
    <br>
    <hr>
    
    <!-- Section Portfólio -->
    <section class="team" id="portfolio">
        <br>
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Portfólio</h2>
                    <h4>O sistema para desenvolvimento ainda será escolhido pela equipe</h4>
                </div>
                <div class="col-md-1 single-member col-sm-2">
                </div>    

                <div class="col-md-4 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/sistema1.jpg')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>SISTEMA</h3>
                        <p>Sistema ainda a ser definido</p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-2">
                </div>  
                <div class="col-md-4 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>CLIENTE</h3>
                        <p>Cliente a ser definido</p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('assets/site/img/cliente2.jpg')}}" alt="member-2">
                    </div>
                </div>
                
                <div class="col-md-1 single-member col-sm-2">
                </div>    
                
            </div>
        </div>
    </section><!-- Fim Section Ferramentas -->



    <!-- map section -->
    <div class="api-map" id="contato">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map"></div>
            </div>
        </div>
    </div><!-- end of map section -->

    <br>
    
    <!-- contact section starts here -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <h2>Contato</h2>
                    </div>
                    <div class="col-md-5 contact-info text-left">
                        <h3>Informações de contato</h3>
                        <div class="info-detail">
                            <ul><li><i class="fa fa-map-marker"></i><span>Endereço:</span> Instituto Federal do Sertão Pernambucano</li></ul>
                            <ul><li><i class="fa fa-phone"></i><span>Telefone:</span> (087) 2101-4300</li></ul>
                            <ul><li><i class="fa fa-envelope"></i><span>Email:</span> marcio0401@gmail.com</li></ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>Envia a sua mensagem</h3>

                        <form class="form">
                            <input class="name" type="text" placeholder="Nome">
                            <input class="email" type="email" placeholder="Email">
                            <input class="phone" type="text" placeholder="Telefone">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Menssagen"></textarea>
                            <input class="submit-btn" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of contact section -->

    <br>
    


    <!-- footer starts here -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="col-xs-6 footer-para">
            <p>© 2017 - Todos os direitos reservados - 
            Desenvolvido por
              <a href="https://www.facebook.com/marcio.diniz.5203" target="_blank">
                Márcio Rodrigues Diniz.
              </a>
            </p>
            </div>
            <div class="col-xs-6 text-right">
                    
                    <a href="https://www.facebook.com/marcio.diniz.5203"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>

                </div>
          </div>
        </div>
      </div>
    </footer>




    <!-- Scripts -->
    <script src="assets/site/js/jquery-2.1.1.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/site/js/gmaps.js"></script>
    <script src="assets/site/js/smoothscroll.js"></script>
    <script src="assets/site/js/bootstrap.min.js"></script>
    <script src="assets/site/js/custom.js"></script>
</body>
</html>
