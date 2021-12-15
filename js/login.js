function validar(){
    var email = formulario.email.value;
    var senha = formulario.senha.value;
    var img = document.getElementById('icone');
    
    if(email == "" || email.indexOf('@') == -1 ){
        alert('E-mail incorreto! Tente novamente');
        formulario.email.focus();
        return false;
    }
    
    if(senha == "" || senha.length <= 5){
        img.src = './img/errado.svg'
        alert('Senha inserida incorretamente! Preencha com no mínimo 6 caracteres');
        formulario.senha.focus();
        return false;
    }
}
