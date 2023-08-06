/*dark mode*/
function tema(){
    var corpo1 = document.querySelector('.corpo-bd')
    var tabela = document.querySelectorAll('.conteiner-dados1')
    var text1 = document.querySelectorAll('.text1')
    var icone = document.querySelectorAll('.icone1')
    var botao = document.querySelectorAll('.btn')
    var login = document.querySelector('.janela1')
    var cadastro = document.querySelector('.janela2')

    document.body.classList.toggle('dark2')
    corpo1.classList.toggle('dark6')
    tabela[0].classList.toggle('dark7')
    tabela[1].classList.toggle('dark7')


    text1[0].classList.toggle('dark')
    text1[1].classList.toggle('dark')
    text1[2].classList.toggle('dark')
    text1[3].classList.toggle('dark')
    text1[4].classList.toggle('dark')
    text1[5].classList.toggle('dark')
    text1[6].classList.toggle('dark')
    text1[7].classList.toggle('dark')
    text1[8].classList.toggle('dark')
    text1[9].classList.toggle('dark')

    botao[0].classList.toggle('dark3')
    botao[1].classList.toggle('dark3')

    icone[0].classList.toggle('md-light')
    icone[1].classList.toggle('md-light')

    login.classList.toggle('dark4')
    cadastro.classList.toggle('dark5')
}

window.onload = testadora()
function testadora(){
    if (localStorage.getItem('theme') == 'luz'){


    }else{
        tema()
    }
}

/*MENU*/
var conteiner = document.querySelector('.conteiner-menu')
var icon = document.querySelector('.menu')
icon.addEventListener('click', mostrar)
function mostrar(){
    conteiner.classList.toggle('active')
}




/*TELA DE LOGIN E CADASTRO*/
var telaLogin = document.querySelector('.janela1')
var telacadastro = document.querySelector('.janela2')

var abra1 = document.querySelector('.abra1')
abra1.addEventListener('click', login)
function login(){
    telaLogin.showModal()
    var teste = conteiner.classList.contains('active')
    if(teste == true){
        conteiner.classList.remove('active')
        burguer.textContent = 'menu'
    }
}
var fecha1 = document.querySelector('.fechar')
fecha1.addEventListener('click', fechamento1)
function fechamento1(){
    telaLogin.close()
}


var abra2 = document.querySelector('.abra2')
abra2.addEventListener('click', cadastro)
function cadastro(){
    telacadastro.showModal()
    var teste = conteiner.classList.contains('active')
    if(teste == true){
        conteiner.classList.remove('active')
        burguer.textContent = 'menu'
    }
}
var fecha1 = document.querySelector('.fechar2')
fecha1.addEventListener('click', fechamento2)
function fechamento2(){
    telacadastro.close()
}