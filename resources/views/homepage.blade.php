<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>José Dias - Portefólio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    {{--<link href="css/fonts/fontawesome.min.css" rel="stylesheet" type="text/css">--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>--}}

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    {{-- custom css--}}
    <link href="css/style.css" rel="stylesheet">

    {{-- typewriter--}}
    <script src="js/typewriter.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo/logo_nome.png" height="44.23" width="150"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">Sobre</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Serviços</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Portefólio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contactos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>

    <video id="bgvid" playsinline autoplay muted loop>
        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        {{--<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">--}}
        <source src="video/fireworks_big.mp4" type="video/mp4">
    </video>

    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading"><div id="app"></div></h1>


            <div id="polina">
                <button class=" btn btn-primary btn-xl align-bottom" style="visibility: hidden">Pause</button>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">SOBRE</h2>
                <hr class="primary">
                <p class="text-faded">Sou licenciado em Novas Tecnologias de Comunicação e investigador no DeCA - Departamento de Comunicação e Arte da Universidade de Aveiro.</p>
                <p class="text-faded">A minha principal área de estudos envolve o desenvolvimento web e sistemas de interação homem-computador, com um maior interesse em sistemas de realidade virtual e aumentada para jogos.</p>
                <p class="text-faded">Estou atualmente a terminar o Mestrado em Comunicação Multimédia na Universidade de Aveiro.</p>
            </div>
        </div>
    </div>
</section>


<section id="services" class="fundo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading whiteclr">SOLUÇÕES PERSONALIZADAS</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <img src="img/svg/web-design.svg" width="175px">
                    <h3 class="redclr">WEB DESIGN</h3>
                    <p class="text-muted whiteclrfaded">Construção de imagem visual e usabilidade</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <img src="img/svg/web-development.svg" width="175px">
                    <h3 class="redclr">WEB DEVELOPMENT</h3>
                    <p class="text-muted whiteclrfaded">Implementação de páginas Web em Front-end e Back-end</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <img src="img/svg/AR.svg" width="175px">
                    <h3 class="redclr">REALIDADE AUMENTADA</h3>
                    <p class="text-muted whiteclrfaded">Aplicações Mobile para iOS e Android</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        {{-- <div class="row no-gutter popup-gallery"> --}}
        <div class="row no-gutter">

            {{-- portfolio inmension--}}
            <div class="col-lg-4 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#inmension" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/logo_inmension.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                REALIDADE AUMENTADA
                            </div>
                            <div class="project-name">
                                INMENSION
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--Modal inmension-->
            <div class="modal fade" id="inmension" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content backgroundclrmodal">
                        <div class="modal-header">
                            <h4 class="modal-title justUppercase redclr">INMENSION</h4>
                        </div>
                        <div class="modal-body fontBig whiteclr">
                            <b>Descrição:</b>
                            <p>A INMENSION é uma aplicação móvel que integra seis jogos interativos em realidade aumentada com o objetivo de proporcionar uma divertida visita guiada aos novos membros do Departamento de Comunicação e Arte na Universidade de Aveiro. Para jogar, basta formar uma equipa e começar a procurar os identificadores espalhados pelo edifício.</p>
                            <b>Autores:</b>
                            <p>José Dias, Gregory Caldeira, Ricardo Xavier, André Almeida</p>
                            <b>Linguagens de Programação:</b>
                            <p>C#, PHP, HTML, CSS, Javascript</p>
                            <b>Vídeo:</b><p></p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="videoinmension" class="embed-responsive-item" allowfullscreen></iframe>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            {{-- portfolio lets dance--}}
            <div class="col-lg-4 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#letsdance" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/logo_letsdance.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Interação Humano-Computador
                            </div>
                            <div class="project-name">
                                Let's Dance
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--Modal lets dance-->
            <div class="modal fade" id="letsdance" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content backgroundclrmodal">
                        <div class="modal-header">
                            <h4 class="modal-title justUppercase redclr">Let's Dance</h4>
                        </div>
                        <div class="modal-body fontBig whiteclr">
                            <b>Descrição:</b>
                            <p>O Let's Dance é um jogo lúdico de ritmo, música e dança para crianças. Existem 2 avatars (professor e aluno), sendo que o aluno deverá seguir os passos de dança representados pelo professor no ecrã. O objetivo do jogador é o de pisar o sensor identificado pelo led na matriz física, correspondente à cor (verde) que aparecer projetada na matriz digital do jogo.</p>
                            <b>Autores:</b>
                            <p>José Dias, Maria Inês Almeida, Nuno Soares</p>
                            <b>Linguagens/Tecnologia:</b>
                            <p>C#, Arduino, Kinect</p>
                            <b>Vídeo:</b><p></p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="videoletsdance" class="embed-responsive-item" allowfullscreen></iframe>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            {{-- portfolio CAL--}}
            <div class="col-lg-4 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#cal" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/cal_logo.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Ensino à distância
                            </div>
                            <div class="project-name">
                                Context-Aware for Learning (demo)
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--Modal CAL-->
            <div class="modal fade" id="cal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content backgroundclrmodal">
                        <div class="modal-header">
                            <h4 class="modal-title justUppercase redclr">Context Aware for Learning</h4>
                        </div>
                        <div class="modal-body fontBig whiteclr">
                            <b>Descrição:</b>
                            <p>Uma ferramenta para ensino à distância, composta por conteúdos programáticos teóricos sobre o tema "Context Aware for Learning". Cada módulo é composto por vários temas associados e com jogos/questionários interativos.</p>
                            <b>Autores:</b>
                            <p>José Dias, Paulo César, Paulo Neves</p>
                            <b>Linguagens de Programação:</b>
                            <p>HTML, CSS, Javascript</p>
                            <b>Website:</b>
                            <p><a target="_blank" href="http://mgc.pneves.pt/">http://mgc.pneves.pt/</a></p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            {{-- portfolio artconcept--}}
            <div class="col-lg-4 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#artconcept" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/artconcept_logo.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                WEB Design / WEB Development
                            </div>
                            <div class="project-name">
                                Art Concept
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--Modal Art Concept-->
            <div class="modal fade" id="artconcept" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content backgroundclrmodal">
                        <div class="modal-header">
                            <h4 class="modal-title justUppercase redclr">Art Concept</h4>
                        </div>
                        <div class="modal-body fontBig whiteclr">
                            <b>Autores:</b>
                            <p>José Dias, Arrail - Estúdio Criativo</p>
                            <b>Tecnologia:</b>
                            <p>Wordpress</p>
                            <b>Website:</b>
                            <p><a target="_blank" href="http://www.artconcept.ch/www/">http://www.artconcept.ch/www/</a></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            {{-- portfolio visionmaker --}}
            <div class="col-lg-4 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#visionmaker" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/visionmaker_logo.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                WEB Design / WEB Development
                            </div>
                            <div class="project-name">
                                VisionMaker
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal visionmaker -->
            <div class="modal fade" id="visionmaker" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content backgroundclrmodal">
                        <div class="modal-header">
                            <h4 class="modal-title justUppercase redclr">VisionMaker</h4>
                        </div>
                        <div class="modal-body fontBig whiteclr">
                            <b>Autores:</b>
                            <p>José Dias, Arrail - Estúdio Criativo</p>
                            <b>Tecnologia:</b>
                            <p>Wordpress</p>
                            <b>Website:</b>
                            <p><a target="_blank" href="http://visionmaker.pt/www/">http://visionmaker.pt/www/</a></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            {{-- blank --}}
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                A cozinhar o próximo projeto
                            </div>
                            <div class="project-name">

                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
</section>



<section id="contact" class="fundo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading whiteclr">CONTACTOS</h2>
                <hr class="primary">
                <p class="whiteclrfaded">Está preparado para começar o seu projeto? Telefone ou envie um e-mail. Obterá uma resposta o mais rapidamente possível!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact redclr"></i>
                <p><a href="tel:912607651" class="whiteclrfaded">+351 91 260 76 51</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope fa-3x sr-contact redclr"></i>
                <p><a href="mailto:josedias@ua.pt" class="whiteclrfaded">josedias@ua.pt</a></p>
            </div>
        </div>
    </div>
</section>

<div class="footer">
    <img src="img/svg/svg_logo_name.png" width="100px">

    <div class="container-fluid">
        © 2018 José Dias </a>

    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

{{-- video portfolio pause --}}
<script type="text/javascript">
    // inmension
    $('#inmension').on('hidden.bs.modal', function () {

        $('#videoinmension').attr('src', '');
    });
    $('#inmension').on('shown.bs.modal', function () {

        $('#videoinmension').attr('src', 'https://www.youtube.com/embed/DQ95hzJ7uXw');
    });
    // lets dance
    $('#letsdance').on('hidden.bs.modal', function () {

        $('#videoletsdance').attr('src', '');
    });
    $('#letsdance').on('shown.bs.modal', function () {

        $('#videoletsdance').attr('src', 'https://www.youtube.com/embed/rxfvws9-Jvg');
    });

</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/creative.min.js"></script>

{{-- js video --}}
<script src="js/videojs.js"></script>

{{-- typewriter timer--}}
<script src="js/timertypewriter.js"></script>

</body>

</html>