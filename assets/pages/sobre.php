<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/car-logo-design.png">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/sobre.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="./assets/css/mobile.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Driver Labs - Sobre nós</title>
</head>

<body id="about-page">

    <header id="cabecalho">

        <div class="navbar">
            <div class="container">
                <a href="http://localhost/driver_labs">
                    <img src="http://localhost/driver_labs/assets/img/car-logo-design.png" alt="">
                </a>

                <ul>
                    <li><a href="http://localhost/driver_labs">Inicio</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/sobre.php" class="active">Sobre</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/precos.php">Preços</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/cursos.php">Cursos</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/contactos.php">Contactos</a></li>
                </ul>

                <a href="#" class="btn btn-login">Entrar</a>
                <div class="abrir_fechar">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="mobile">
                <li><a href="http://localhost/driver_labs">Inicio</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/sobre.php" class="active">Sobre</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/cursos.php">Cursos</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/contactos.php">Contacto</a></li>
            </div>
        </div>
    </header>

    <section id="popup" class="popup">

        <div class="container">

            <div class="login_popup">

                <div class="form-container">
                    <div class="box box-1">
                        <div class="content">
                            <h1 class="titulo-g">Bem-Vindo</h1>
                            <h2 class="titulo-m">Aprender a conduzir nunca foi tão fácil</h2>
                            <p class="lead">Entre para gerenciar suas aulas, acompanhar seu progresso e aproveitar ao máximo sua experiência de aprendizado!</p>
                        </div>
                        <div class="bola-1"></div>
                        <div class="bola-2"></div>
                    </div>

                    <div class="box box-2">

                        <i class="fa-solid fa-close"></i>

                        <div class="content">
                            <h1 class="titulo-g">Entrar</h1>
                            <p class="lead">Acesse o seu painel para melhor administrar os seus estudos</p>
                        </div>
                        <form id="login_form" method="POST" action="/assets/php/login.php">
                            <div class="input-group mb-10">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" name="login_email" id="login_email" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-10">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="login_senha" id="login_senha" placeholder="Palavra-passe" required>
                            </div>

                            <div class="checkbox mb-10">
                                <p><input type="checkbox"> Lembrar-me</p>
                                <a href="#">Esqueceu a palavra-passe?</a>
                            </div>

                            <div class="butoes mb-10">
                                <button id="signin" class="signin">Entrar</button>
                                <div>
                                    <span></span> ou <span></span>
                                </div>
                                <button id="signin_others" class="signup">Entrar com outra</button>
                            </div>

                            <p class="conta">Não tem uma conta? <a href="#" class="btn_popup_register">Registrar</a></p>
                        </form>
                    </div>
                </div>

            </div>

            <div class="register_popup hide">

                <div class="form-container">
                    <div class="box box-1">
                        <div class="content">
                            <h1 class="titulo-g">Bem-Vindo</h1>
                            <h2 class="titulo-m">Aprender a conduzir nunca foi tão fácil</h2>
                            <p class="lead">Entre para gerenciar suas aulas, acompanhar seu progresso e aproveitar ao máximo sua experiência de aprendizado!</p>
                        </div>
                        <div class="bola-1"></div>
                        <div class="bola-2"></div>
                    </div>

                    <div class="box box-2">

                        <i class="fa-solid fa-close"></i>

                        <div class="content">
                            <h1 class="titulo-g">Registrar</h1>
                            <p class="lead">Cadastre-se para fazer a gestão do teu aprendizado a sua maneira!</p>
                        </div>

                        <form id="register_form" method="POST" action="../php/register.php">
                            <div class="input-group mb-10">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" name="register_nome" id="register_nome" placeholder="Nome" required>
                            </div>

                            <div class="input-group mb-10">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" name="register_apelido" id="register_apelido" placeholder="Apelido" required>
                            </div>

                            <div class="input-group mb-10">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" name="register_email" id="register_email" placeholder="E-mail" required>
                            </div>

                            <div class="input-group mb-10">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="register_password" id="register_senha" placeholder="Palavra-passe" required>
                            </div>

                            <div class="input-group mb-10">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="register_password2" id="register_senha2" placeholder="Confirmar palavra-passe" required>
                            </div>

                            <div class="butoes mb-10">
                                <button type="submit" id="signup" class="signin">Resgistrar</button>

                                <p class="conta">Já tem uma conta? <a href="#" class="btn_popup_login">Entrar</a></p>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <main>
        <section id="about-banner">

            <div class="breadcrumb">

                <div class="container">
                    <h1 class="titulo-g">Driver Labs</h1>
                    <p class="lead">Conheça a equipe da plataforma que te proporciona a direção certa.</p>
                </div>

            </div>

        </section>

        <section id="us">
            <div class="container flex-column">
                <div class="flex">
                    <img src="../img/curso-certificado.PNG" alt="">
                    <div class="content flex-column">
                        <p class="lead" style="color: var(--azul-claro)">Aulas de direção?</p>
                        <div class="barra-lateral">
                            <span class="barra"></span>
                            <h1 class="titulo-g">Aumente as Chances de Mais Cedo te Tornares um Motorista</h1>
                        </div>
                        <p class="lead">Somos uma escola conceituada e capacitada para fornecer as melhores estrategias na via pública com vista à agregar valor e ética durante a condução. Atuamos com padrões de excelência no serviço ao cliente, aperfeiçoando processos, habilidades humanas e profissionais com objectivo de proporcionar retorno adequado a administração e colaborador.</p>
                    </div>
                </div>

                <div class="objectivo">
                    <div class="box flex-column">

                        <div class="flex">

                            <i class="fa-solid fa-street-view"></i>

                            <h2 class="titulo-m">Como Começamos</h2>
                        </div>

                        <p class="lead">Antes de aparecermos, os chamados "cursos intensivos" não tinham uma boa reputação. Queríamos mudar isso e começamos a trabalhar para ajustar nossos cursos eficientes, mas de alta qualidade!</p>

                    </div>

                    <div class="box flex-column">

                        <div class="flex">

                            <i class="fa-solid fa-location-dot"></i>

                            <h2 class="titulo-m">Onde Estamos Agora</h2>

                        </div>

                        <p class="lead">Mais de 50.000 pessoas vieram a Driver Labs para ajudar a transformar seus sonhos de dirigir em realidade. Cobrimos todo o Maputo.</p>

                    </div>

                    <div class="box flex-column">

                        <div class="flex">

                            <i class="fa-solid fa-route"></i>

                            <h2 class="titulo-m">Para Onde Vamos</h2>

                        </div>

                        <p class="lead">Não há como nos parar agora! Queremos que todos em Moçambique tenham acesso aos incríveis cursos intensivos da Driver Labs. Nosso objetivo é oferecer a melhor experiência do cliente da categoria</p>

                    </div>
                </div>
            </div>
        </section>

        <section id="educacao-online">

            <div class="container flex-column">

                <div class="barra-lateral">

                    <span class="barra"></span>
                    <h1 class="titulo-g">Educação Online</h1>

                </div>
                <div class="box flex">

                    <div class="content flex-column">

                        <p class="lead">Na Driver Labs, acreditamos que a educação online para motoristas é mais do que apenas uma maneira fácil de dispensar uma multa ou aprender a dirigir. É sobre prevenir acidentes, aliviar o estresse e promover hábitos de direção seguros e responsáveis ​​por meio de conveniência, qualidade e acesso aos melhores recursos do setor. Valorizamos seu tempo, por isso damos a você acesso a tudo o que precisa, na ponta dos dedos. E por meio de nossos cursos on-line de segurança do motorista no seu próprio ritmo, você aprenderá da maneira que aprende melhor, onde, quando e como quiser.</p>

                    </div>

                    <img src="../img/ensino-online.png" alt="Ensino Online">

                </div><!-- box flex -->

            </div><!-- container flex-column -->

        </section><!-- educacao-online -->

        <section id="como-funciona">

            <div class="container flex-column">

                <div class="barra-lateral">
                    <span class="barra"></span>
                    <h1 class="titulo-g">Como Funciona</h1>
                </div>

                <div class="box box-1 flex-column">

                    <span class="number">1</span>

                    <h2 class="titulo-m">Verifique seu progresso</h2>

                    <p class="lead">O <span style="color: var(--azul-escuro)">Portal do Aluno</span> é o seu lugar para tudo o que diz respeito a Driver Labs.</p>

                </div>

                <div class="box arrow arrow-right">
                    <img src="../img/right-arrow.png" alt="Right Arrow">
                </div>

                <div class="box box-2 flex-column">

                    <span class="number">2</span>

                    <h2 class="titulo-m">Obtenha ajuda de nossos especialistas</h2>

                    <p class="lead">Acesse <span style="color: var(--azul-escuro)">aulas on-line</span> e os principais recursos — Driver Labs aumenta suas chances de passar na teoria e na pratica.</p>

                </div>

                <div class="box arrow arrow-left">
                    <img src="../img/left-arrow.png" alt="Left Arrow">
                </div>

                <div class="box box-3 flex-column">

                    <span class="number">3</span>

                    <h2 class="titulo-m">Vídeos de aulas de direção</h2>

                    <p class="lead">Conselhos de condução de especialistas — <span style="color: var(--azul-escuro)">a qualquer hora, em qualquer lugar,</span> de qualquer smartphone ou computador.</p>

                </div>

            </div>

        </section>

        <section id="instructors">
            <div class="container flex-column">
                <div class="flex">
                    <div>
                        <div class="barra-lateral">
                            <span class="barra"></span>
                            <h1 class="titulo-g">Nossos Instructores</h1>
                        </div>

                        <p class="lead">Cada um de nossos instrutores é certificado e possui vasta experiência no ensino de condução. <br>Entendemos que cada aluno é único. Nossos instrutores trabalham com uma abordagem personalizada, garantindo que você receba a atenção e o suporte necessários para se tornar um motorista seguro e responsável.</p>
                    </div>
                </div><!-- flex -->

                <div class="cards">
                    <div class="card">
                        <div class="img" style="background-image: url(../img/instrutor-1.PNG);"></div>
                        <h2>John Doe</h2>
                        <div>
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, libero!</p>
                    </div><!-- card -->
                    <div class="card">
                        <div class="img" style="background-image: url(../img/instrutor-2.PNG);"></div>
                        <h2>Louis Magma</h2>
                        <div>
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, libero!</p>
                    </div><!-- card -->
                    <div class="card">
                        <div class="img" style="background-image: url(../img/instrutor-3.PNG);"></div>
                        <h2>Matty Sins</h2>
                        <div>
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, libero!</p>
                    </div><!-- card -->
                </div><!-- cards -->
                <a href="http://localhost/driver_labs/assets/pages/intructores.php" class="btn">Ver Mais <i class="fa-solid fa-arrow-right"></i></a>
            </div><!-- container -->
        </section><!-- instructors-->

    </main>

    <button id="voltar-ao-topo" title="Voltar ao topo"><i class="fa-solid fa-arrow-up"></i></button>

    <footer id="main-footer">
        <div class="container flex-column">
            <div class="flex">

                <div>
                    <button><i class="fa-brands fa-facebook-f"></i></button>
                    <a href="#">Suporte</a>
                </div>

                <div>
                    <button><i class="fa-solid fa-envelope"></i></button>
                    <a href="#">Informação</a>
                </div>
                <div>
                    <button><i class="fa-brands fa-instagram"></i></button>
                    <a href="#">Suporte</a>
                </div>

            </div>

            <hr>
            <p style="font-size: .9rem; text-align: center; color: #fff;">2024 &copy; Driver Labs Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="../js/perguntas-resposta.js"></script>
    <script src="../js/register.js"></script>

</body>

</html>