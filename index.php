<!--Conexãp DB-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vemsegura";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem'])) {
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $sql = "insert into tb_contato (email, assunto, mensagem) values ('$email', '$assunto', '$mensagem')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Animação no scroll-->
    <!--<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <!--GoogleFont-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <!--BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/4e663ca019.js" crossorigin="anonymous"></script>
    <!--Progress Bar-->
    <script src="progressbar.min.js"></script>
    <!--Parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

    <title>vem segura</title>
</head>

<body>

    <!--NAV-BAR-->

    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                <a href="/vemsegura/index.php" class="navbar-brand">
                    <img id="logo" src="img/logo.png" alt="logo vem segura">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link" id="home-menu">Home</a>
                        <a href="#" class="nav-item nav-link" id="about-menu">Sobre</a>
                        <a href="#" class="nav-item nav-link" id="services-menu">Leis e Artigos</a>
                        <a href="#" class="nav-item nav-link" id="team-menu">Time</a>
                        <a href="#" class="nav-item nav-link" id="contato-menu">Contato</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Funcionalidades
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="denuncia.php">Denunciar</a>
                                <a class="dropdown-item" href="cadastro.php">Cadastre-se</a>
                                <a class="dropdown-item" href="consulta.php">Consulta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>




        <!--HEADER CAROUSEL-->

        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="banner1" class="d-block w-100 img-fluid" src="img/sentada-mulher.jpg" alt="mulher de costas sentada no onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Diminuir os casos de assédio no transporte</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="img/pagamento-mulher.jpg" alt="mulher entrando no onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Aumentar o índice de denúncias</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="img/ponto-mulher.jpg" alt="mulher esperando onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Oferecer informação e conscientização</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais </a>
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--INFO VEM SEGURA-->

            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">CONHEÇA O VEM SEGURA</h3>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="img/mobilidade-site.jpg" alt="mulher em frente ao metro">
                        </div>

                        <div class="col-md-6">
                            <h3 class="about-title">A solução pensada para as mulheres</h3>
                            <p>Vem Segura é uma plataforma que visa combater e prevenir os casos de assédio contra as mulheres no transporte público na cidade do Rio de Janeiro.</p>
                            <p>O Vem Segura não é uma mera plataforma de denúncias,seu propósito vai muito além disso. Queremos além de possiblitar a realização da denúncia,servir como uma fonte de informações e conscientização para todos os usuários do transporte público.</p>

                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Comunicação direta com a equipe de segurança</li>
                                <li><i class="fas fa-check"></i> Qualquer pessoa pode fazer a denúncia</li>
                                <li><i class="fas fa-check"></i> Plataforma amigável</li>
                                <li><i class="fas fa-check"></i> Ajuda rápida de forma segura</li>
                                <li><i class="fas fa-check"></i> Instruções de como proceder em uma situação de assédio</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <!--Serviços Vem Segura-->

            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Principais crimes contra as mulheres</h3>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Importunação Sexual</h4>
                            <p>Qualquer ato libidinoso sem o consentimento da vítima.</p>
                            <p>Dentro do transporte público (ônibus, trem, metro), uma pessoa fica se masturbando ou mesmo tenta
                                esfregar o órgão genital na vítima.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Assédio Sexual</h4>
                            <p>Ato libidinoso sem o consentimento da vítima, com relação de hierarquia.</p>
                            <p>O dono de uma empresa aborda sua secretária, oferecendo um cargo e salário melhor do que ela
                                possui, em troca de relações sexuais com ele.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Estupro</h4>
                            <p>Constranger alguém, mediante violência ou grave ameaça, para obter conjunção carnal.</p>
                            <p>Uma pessoa conhecida ou desconhecida, que lhe ameaça de morte ou agride fisicamente, para ter a
                                força uma relação sexual.</p>
                        </div>

                        <div class="col-12">
                            <h3 class="main-title">Leis e Artigos</h3>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Importunação Sexual</h4>
                            <p>Enquadrado como crime pela Lei n°13.718/2018 — pena pode variar entre 1 e 5 anos, sendo aumentada em caso de
                                agravantes.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Assédio Sexual</h4>
                            <p>Enquadrado como crime pelo artigo 216 do Código Penal — pena pode variar entre 1 e 2 anos e prisão.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Estupro</h4>
                            <p>Enquadrado como crime hediondo pelo artigo 213 do Código Penal — pena pode variar de 6 a 10 anos de reclusão para o criminoso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Localize uma delegacia-->
            <div>
            <?php include("delegacias.php")?>
            </div>


            <!--Estatisticas da violência contra a mulher-->

            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>97% das mulheres já sofreram assédio no transporte.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>A cada 16 horas é registrado um caso de assédio a mulheres em algum transporte do Rio de Janeiro.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>35% foi no transporte.<br>O local com maior número de denúncias registradas de assédio é no transporte público.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>46% das mulheres não se sentem confiantes para usar meios de transporte sem sofrer assédio sexual.</p>
                        </div>
                    </div>
                </div>
            </div>



            <!--TIME-->
            <div id="time-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/eu-site.jpg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Davi Barbosa</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/aline.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Aline Cardoso</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/douglas.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Douglas Batista</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/carol.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Caroline Siqueira</h5>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/gustavo.jpeg" class="card-img-top img-fluid" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Gustavo Lopes</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/thamiris.jpeg" class="card-img-top " alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Thamiris Silva</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Saiba Mais-->

            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 apply-box" id="pattern-img">
                            <h4>Quer ajudar nessa missão?</h4>
                            <p>O Vem Segura é uma solução sem fins lucrativos, baseada na colaboração de todos os usuários e patrocinadores.</p>

                            <p>Quer saber como ajudar na nossa causa?</p>
                            <a href="#contact-area" class="main-btn" id="apply-btn">Contate-nos</a>
                        </div>

                    </div>
                </div>
            </div>



            <!--CONTATO RAPIDO-->

            <?php include("novidades.php") ?>

            <!--CHAMADA PARA AÇÃO DO USUÁRIO-->

            <!--
            <div id="call-area">
                <div class="container">
                    <div class="row">
                        <p>Contacte-nos para contribuir com essa causa!</p>
                        <button class="main-btn" id="call-btn">contato</button>
                    </div>
                </div>
            </div>
            -->
        </div>

    </main>

    <footer>
        <!--FOOTER-->

        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-title">Ligue para : </span> (21)9999-9999</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-title">E-mail : </span> vemsegura@gmail.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt "></i>
                        <p><span class="contact-title">Endereço : </span><br> R. dos Inválidos, 212 - 10º andar - Centro, Lapa - RJ, 20231-046</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem : </p>
                    </div>
                    <div class="col-md-6">
                        <form method="post" id="contact-form" action="/vemsegura/index.php">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                            <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="mensagem"></textarea>
                            <input type="submit" value="Enviar" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="#">Squad 2 - RJ</a> 2020 &copy;</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--Script-->
    <script>
        $(document).ready(function() {
            //BarraDeProgresso

            let containerA = document.getElementById("circleA");

            let circleA = new ProgressBar.Circle(containerA, {


                color: '#ae55f2',
                strokeWidth: 6,
                duration: 1400,
                from: {
                    color: '#AAA'
                },
                to: {
                    color: '#ae55f2'
                },

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    let value = Math.round(circle.value() * 97);

                    circle.setText(value);
                }


            });

            let containerB = document.getElementById("circleB");

            let circleB = new ProgressBar.Circle(containerB, {


                color: '#ae55f2',
                strokeWidth: 6,
                duration: 1600,
                from: {
                    color: '#AAA'
                },
                to: {
                    color: '#ae55f2'
                },

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    let value = Math.round(circle.value() * 16);

                    circle.setText(value);
                }


            });

            let containerC = document.getElementById("circleC");

            let circleC = new ProgressBar.Circle(containerC, {


                color: '#ae55f2',
                strokeWidth: 6,
                duration: 1800,
                from: {
                    color: '#AAA'
                },
                to: {
                    color: '#ae55f2'
                },

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    let value = Math.round(circle.value() * 35);

                    circle.setText(value);
                }


            });

            let containerD = document.getElementById("circleD");

            let circleD = new ProgressBar.Circle(containerD, {


                color: '#ae55f2',
                strokeWidth: 6,
                duration: 2000,
                from: {
                    color: '#AAA'
                },
                to: {
                    color: '#ae55f2'
                },

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    let value = Math.round(circle.value() * 46);

                    circle.setText(value);
                }


            });

            //animando só quando o usuário chegar em determinada parte do site
            let dataAreaOffset = $('#data-area').offset();
            let stop = 0;

            $(window).scroll(function(e) {

                let scroll = $(window).scrollTop();

                if (scroll > (dataAreaOffset.top - 500) && stop == 0) {

                    circleA.animate(1.0);
                    circleB.animate(1.0);
                    circleC.animate(1.0);
                    circleD.animate(1.0);

                    stop = 1;

                }

            });

            //Parallax(imagem ao fundo estatica)

            setTimeout(function() {

                $('#data-area').parallax({
                    imageSrc: 'img/parallax.jpg'
                });
                $('#pattern-img').parallax({
                    imageSrc: 'img/assedio-onibus-pessoas.jpeg'
                });


            }, 250);

            let navBtn = $('.nav-item');

            let bannerSection = $('#mainSlider');
            let aboutSection = $('#about-area');
            let servicesSection = $('#services-area');
            let timeSection = $('#time-area');
            let denunciaSection = $('#apply-area');
            let contatoSection = $('#contact-area');

            let scrollTo = '';

            $(navBtn).click(function() {

                let btnId = $(this).attr('id')


                if (btnId == 'about-menu') {
                    scrollTo = aboutSection;
                } else if (btnId == 'services-menu') {
                    scrollTo = servicesSection;
                } else if (btnId == 'team-menu') {
                    scrollTo = timeSection;
                } else if (btnId == 'denuncia-menu') {
                    scrollTo = denunciaSection;
                } else if (btnId == 'contato-menu') {
                    scrollTo = contatoSection;
                } else {
                    scrollTo = bannerSection
                }

                $([document.documentElement, document.body])
                    .animate({
                        scrollTop: $(scrollTo).offset().top - 70
                    }, 1000);

            });



        });
    </script>

</body>

</html>