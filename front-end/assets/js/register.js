// validacao do registro

document.getElementById('register_form').addEventListener('submit', (event) => {
    
    event.preventDefault();
    // alert('funciona')
    
    const nome = document.getElementById('register_nome').value,
    apelido = document.getElementById('register_apelido').value,
    email = document.getElementById('register_email').value,
    senha1 = document.getElementById('register_senha').value,
    senha2 = document.getElementById('register_senha2').value;
    
    if (nome === '' || apelido === '' || email === '' || senha1 === '' || senha2 === '') {
        alert('Todos os campos são obrogatótios!');
        return;
    }
    
    // Validação do email (usando regex simples)
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('O email digitado é inválido!');
        return;
    }
    
    let senha;
    
    if (senha1 !== senha1) {
        alert(`As senhas não combinam! <br> Por favor corrija o erro!`)
    } else {
        senha = senha2;
    }
    
    // Se a validação passar, envia o formulário manualmente
    // Aqui é onde o envio normal acontece
    document.getElementById('register_form').submit();  // Envia o formulário após validação
    
});



// Validacao do Login

document.getElementById('login_form').addEventListener('submit', (event) => {
    
    event.preventDefault();
    // alert('funciona')
    
    const email = document.getElementById('login_email').value,
    senha = document.getElementById('login_senha').value;
    
    if (email === '' || senha === '') {
        alert('Todos os campos são obrogatórios!');
        return;
    }

    // Validação do email (usando regex simples)
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('O email digitado é inválido!');
        return;
    }
    
    
    // Se a validação passar, envia o formulário manualmente
    // Aqui é onde o envio normal acontece
    document.getElementById('login_form').submit();  // Envia o formulário após validação
    
});