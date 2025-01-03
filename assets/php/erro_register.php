<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Driver Labs - Aulas de direção</title>
        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Inter Regular';
                color: #fff;
                text-align: center;
            }

            body {
                height: 100vh;
                width: 100vw;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: #01568E;
            }

            h1 {
                font-size: 16px;
                font-weight: 400;
            }

            h1 b {
                color: #000;
            }

            a {
                display: block;
                background: #1076BC;
                padding: 10px 30px;
                font-size: 15px;
                margin-top: 50px;
                border-radius: 10px;
                text-decoration: none;
                transition: .4s;
            }

            a:hover {
                transform: scale(1.2);
                box-shadow: 0 0 1px 1px #1076BE;
            }

        </style>
    </head>
    <body>

        <h1>Ja existe um usuario cadastrado como <b><?php echo $_GET['email'];  ?></b>, por favor, verifique e tente novamente.</h1>
        <a href="../../index.php">Voltar</a>

    </body>
</html>