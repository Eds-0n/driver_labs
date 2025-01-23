// Script para o navbar
const sobre = document.getElementById('about-page');
const precos = document.getElementById('prices-page');
const contactos = document.getElementById('contact-page');
const cabecalho = document.querySelector('#cabecalho');

document.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        cabecalho.classList.add('scrolled')
    } else {
        cabecalho.classList.remove('scrolled')
    }
});

document.addEventListener('DOMContentLoaded', () => {

    if (sobre) {

        document.querySelector('#about-page header').classList.add('scroll-init');
        
    } else if (precos) {

        document.querySelector('#prices-page header').classList.add('scroll-init');
    
    } else if (contactos) {

        document.querySelector('#contact-page header').classList.add('scroll-init');

    }
        
})
    
// Script para o popup-login
const btnLogin = document.querySelector('.btn-login');
const popup = document.querySelector('#popup');
const closePopup = document.querySelectorAll('#popup .fa-close');

btnLogin.addEventListener('click', () => {
    popup.classList.add('abrir-popup')
});

closePopup.forEach(element => {
    element.addEventListener('click', () => {
    popup.classList.remove('abrir-popup')
})});

// Troca de popups (login & register)

const btnPopupRegister = document.querySelector('.btn_popup_register');
const btnPopupLogin = document.querySelector('.btn_popup_login');

btnPopupRegister.onclick = () => {

    document.querySelector('.login_popup').classList.add('hide');

    document.querySelector('.register_popup').classList.remove('hide');

}

btnPopupLogin.onclick = () => {

    document.querySelector('.register_popup').classList.add('hide');
    
    document.querySelector('.login_popup').classList.remove('hide');

}

// Script para o Menu Mobile
const abrir_fechar = document.querySelector('.abrir_fechar'),
icon = document.querySelector('.abrir_fechar i'),
mobile = document.querySelector('.mobile');

abrir_fechar.onclick = function ()  {
    mobile.classList.toggle('aberto');
    const estaAberto = mobile.classList.contains('aberto');
    
    icon.classList = estaAberto ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
}

//  Fim do Script para o Menu Mobile

// Script do botao flutuante
document.addEventListener('DOMContentLoaded', function () {
    let voltarAoTopo = document.getElementById('voltar-ao-topo');
    
    // Mostrar o botao quando o usuario scollar para baixo
    window.addEventListener('scroll', function () {
        if (this.window.scrollY > 300) {
            voltarAoTopo.style.display = 'block';
        } else {
            voltarAoTopo.style.display = 'none';
        }
    });
    
    // Adiciona o evento de voltar ao topo
    voltarAoTopo.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});