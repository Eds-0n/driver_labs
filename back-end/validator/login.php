<?php

    // Verifica se o método de envio é POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Captura e limpa os dados do formulário
        $email = isset($_POST['login_email']) ? trim($_POST['login_email']) : '';
        $senha = isset($_POST['login_senha']) ? trim($_POST['login_senha']) : '';
        // print_r($_POST);
        // echo $_POST['register_nome'];

        // Validação no lado do servidor

        if (!empty($email) && !empty($senha)) {
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Por favor, insira um email válido.";
                exit;
            }
            
            // Processamento dos dados (exemplo, pode ser salva no banco, enviada por e-mail, etc.)
            include_once('config.php');
            $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
            $result = $conexao->query($sql);

            if (mysqli_num_rows($result) == 1) {

                header('Location: ../system/dashboard.php');
                
            } else {
                
                // Ja existe um usuario usando este email de registro
                // Redirecionamento para uma pagina de erro
                header("Location: erro_register.php?email=$email");
                exit();

            }


        } else {

            echo "Todos os campos são obrigatórios.";
            exit();

        }

    }


?>