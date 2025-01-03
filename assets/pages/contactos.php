<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/car-logo-design.png">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/contactos.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="./assets/css/mobile.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Driver Lab - Contactos</title>
</head>

<body id="contact-page">

    <header id="cabecalho">

        <div class="navbar">
            <div class="container">
                <a href="http://localhost/driver_labs">
                    <img src="http://localhost/driver_labs/assets/img/car-logo-design.png" alt="">
                </a>

                <ul>
                    <li><a href="http://localhost/driver_labs">Inicio</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/sobre.php">Sobre</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/precos.php">Preços</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/cursos.php">Cursos</a></li>
                    <li><a href="http://localhost/driver_labs/assets/pages/contactos.php" class="active">Contactos</a></li>
                </ul>

                <a href="#" class="btn btn-login">Entrar</a>
                <div class="abrir_fechar">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="mobile">
                <li><a href="http://localhost/driver_labs">Inicio</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/sobre.php">Sobre</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/precos.php">Precos</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/cursos.php">Cursos</a></li>
                <li><a href="http://localhost/driver_labs/assets/pages/contactos.php" class="active">Contacto</a></li>
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
                    <h1 class="titulo-g">Contactos</h1>
                    <p class="lead">Estamos sempre procurando trabalhar com novos clientes. <br>Entre em contato de uma das seguintes maneiras.</p>
                </div>

            </div>

        </section>

        <section id="suporte-aluno">

            <div class="container flex-column">

                <div class="barra-lateral">
                    <span class="barra"></span>
                    <h1 class="titulo-g">Suporte ao Estudante</h1>
                </div>

                <div class="suporte">

                    <div class="box flex-column">

                        <i class="fa-solid fa-phone"></i>

                        <h2 class="titulo-m">Telefone</h2>

                        <p class="lead">Se precisar de mais informações ou ajuda para escolher o curso ideal, ligue para nossa equipe de vendas em: <span>+258 87 000 0000.</span> <br>As nossas linhas estão abertas: </p>

                        <div class="tabela-horario grid">
                            <p class="lead">Segunda a Quarta-feira:</p>
                            <p class="lead">09h - 19h</p>
                            <p class="lead">Sexta-feira:</p>
                            <p class="lead">09h - 18h</p>
                            <p class="lead">Sabado e Domingo:</p>
                            <p class="lead">09h - 17h</p>
                        </div>

                        <a href="#" class="btn">Ligue para nós</a>

                    </div>

                    <div class="box flex-column">

                        <i class="fa-solid fa-comment-dollar"></i>

                        <h2 class="titulo-m">Telefone</h2>

                        <p class="lead">Prazos e preços, insira seu codigo postal em nossa pagina de cursos</p>

                        <a href="#" class="btn">Ver preços</a>

                    </div>

                    <div class="box flex-column">

                        <h2 class="titulo-m">Quer solicitar um retorno de chamada?</h2>

                        <p class="lead">Isto é somente para novas reservas. Você será contactado por um membro da nossa equipe de vendas</p>

                        <form>
                            <div class="form-group flex-column">
                                <label for="nome" class="lead">Nome</label>
                                <input type="text" name="nome" id="nome">
                            </div>

                            <div class="form-group flex-column">
                                <label for="tel" class="lead">Telefone</label>
                                <input type="tel" name="tel" id="tel">
                            </div>

                            <div class="form-group flex-column">
                                <label for="tempo" class="lead">Qual é o melhor horário para ligar para você?</label>
                                <select name="tempo" id="tempo">
                                    <option placeholder="Selecione um intervalo de tempo" disabled selected>Selecione um intervalo de tempo</option>
                                    <option value="Manhâ (08h as 12h)">Manhâ (08h as 12h)</option>
                                    <option value="Tarde (12h as 16h)">Tarde (12h as 16h)</option>
                                    <option value="Noite (16h as 20h)">Noite (16h as 20h)</option>
                                </select>
                            </div>

                        </form>

                        <a href="#" class="btn">Me ligue de volta</a>

                    </div>

                </div>

            </div>

        </section>

        <section id="suporte-instrutor">

            <div class="container flex-column">

                <div class="content grid">

                    <div class="suporte-txt">

                        <div class="barra-lateral">
                            <span class="barra"></span>
                            <h1 class="titulo-g">Suporte ao instrutor</h1>
                        </div>

                        <p class="lead">Se você é um instrutor que trabalha com a Driver Labs, entre em contato conosco através do seu <a href="#">Portal de Instrutor</a></p>
                        <p class="lead">Se você estiver interessado em trabalhar conosco, registre seu interesse ou ligue para <a href="#">+258 87 000 0000</a></p>
                    </div>

                    <div class="box flex-column">

                        <i class="fa-solid fa-envelope"></i>

                        <h2 class="titulo-m">E-mail</h2>

                        <p class="lead">Se você for um cliente existente e não tiver um <a href="#">Portal de Instrutor,</a> envie um e-mail para: support@driverlabs.com <br> Respondemos aos seus e-mails das 08h às 18h nos dias úteis.</p>

                        <a href="#" class="btn">Enviar um e-mail</a>

                    </div>

                    <div class="box flex-column">

                        <i class="fa-solid fa-phone"></i>

                        <h2 class="titulo-m">Telefone</h2>

                        <p class="lead">Para suporte urgente com suas instruções, nossas linhas de suporte estão abertas das 9h às 17h, nos dias úteis. <br> Ligue para <a href="#">+258 87 000 0000</a>. <br>Fora desses horários, use nossa central de ajuda ou envie um e-mail para nós.</p>

                        <a href="#" class="btn">Ligar agora</a>

                    </div>

                </div>

            </div>

        </section>

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