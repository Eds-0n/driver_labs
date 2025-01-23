<?php

    // Verifica se o método de envio é POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Captura e limpa os dados do formulário
        $nome = isset($_POST['register_nome']) ? $_POST['register_nome'] : '';
        $apelido = isset($_POST['register_apelido']) ? trim($_POST['register_apelido']) : '';
        $email = isset($_POST['register_email']) ? trim($_POST['register_email']) : '';
        $senha = isset($_POST['register_password']) ? trim($_POST['register_password']) : '';
        // print_r($_POST);
        // echo $_POST['register_nome'];

        // Validação no lado do servidor

        if (!empty($nome) && !empty($apelido) && !empty($email) && !empty($senha)) {
            
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Por favor, insira um email válido.";
                exit;
            }
            
            // Processamento dos dados (exemplo, pode ser salva no banco, enviada por e-mail, etc.)
            include_once('config.php');
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = $conexao->query($sql);

            if (mysqli_num_rows($result) == 0) {

                mysqli_query($conexao, "INSERT INTO usuarios(nome, apelido, email, senha) VALUES ('$nome', '$apelido', '$email', '$senha')");
    
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