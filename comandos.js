                    /* MENU BURGUER*/
var conteiner = document.querySelector('.conteiner-menu')
var burguer = document.querySelector('.menu')
burguer.addEventListener('click', open_menu)
function open_menu(){
    conteiner.classList.toggle('active')
    var teste = conteiner.classList.contains('active')
    if(teste == true){
        burguer.textContent = 'close'
    }else{
        burguer.textContent = 'menu'
    }
}

                    /*MODO NOTURNO*/
var icone = document.querySelector('.icone-modo')
var controle = document.querySelector('.control')
controle.addEventListener('change', mudar)
function mudar(){
    var corpo1 = document.querySelector('.corpo-principal')
    var texto1 = document.querySelectorAll('.text1')
    var icone1 = document.querySelectorAll('.icone1')
    var botao = document.querySelectorAll('.btn')
    var telalogin = document.querySelector('.janela1')
    var telacadastro = document.querySelector('.janela2')

    document.body.classList.toggle('dark2')
    corpo1.classList.toggle('dark1')


    texto1[0].classList.toggle('dark')
    texto1[1].classList.toggle('dark')
    texto1[2].classList.toggle('dark')
    texto1[3].classList.toggle('dark')
    texto1[4].classList.toggle('dark')
    texto1[5].classList.toggle('dark')
    texto1[6].classList.toggle('dark')
    texto1[7].classList.toggle('dark')
    texto1[8].classList.toggle('dark')
    texto1[9].classList.toggle('dark')
    texto1[10].classList.toggle('dark')
    texto1[11].classList.toggle('dark')
    texto1[12].classList.toggle('dark')
    texto1[13].classList.toggle('dark')
    texto1[14].classList.toggle('dark')
    texto1[15].classList.toggle('dark')
    texto1[16].classList.toggle('dark')
    texto1[17].classList.toggle('dark')


    icone1[0].classList.toggle('md-light')
    icone1[1].classList.toggle('md-light')

    botao[0].classList.toggle('dark3')
    botao[1].classList.toggle('dark3')
    botao[2].classList.toggle('dark3')
    botao[3].classList.toggle('dark3')

    telalogin.classList.toggle('dark4')
    telacadastro.classList.toggle('dark5')


    if(controle.checked){
        icone.textContent = 'nightlight_round'
        localStorage.setItem('theme', 'dark')
    }else{
        icone.textContent = 'light_mode'
        localStorage.setItem('theme', 'luz')
    }

}
window.onload = testadora()
function testadora(){
    if (localStorage.getItem('theme') == 'luz'){
        controle.removeAttribute('checked', 'cheked')

    }else{
        controle.setAttribute('checked', 'checked')
        mudar()
    }
}

                        /*TELA DE LOGIN*/
var jan1 = document.querySelector('.janela1')
var perfil = document.querySelector('.perfil')
perfil.addEventListener('click', abrir1)
function abrir1(){
    jan1.showModal()
    var teste = conteiner.classList.contains('active')
    if(teste == true){
        conteiner.classList.remove('active')
        burguer.textContent = 'menu'
    }
}
var fecha1 = document.querySelector('.fechar')
fecha1.addEventListener('click', fechar1)
function fechar1(){
    jan1.close()
}
                     /*TELA DE CADASTRO*/
var jan2 = document.querySelector('.janela2')
var cadastro = document.querySelector('.cadastro')
cadastro.addEventListener('click', abrir2)
function abrir2(){
    jan1.close()
    jan2.showModal()
}
var fecha2 = document.querySelector('.fechar2')
fecha2.addEventListener('click', fechar2)
function fechar2(){
    jan2.close()
}