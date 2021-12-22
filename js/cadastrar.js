function validar(){
    var nascimento = cadastrar.nascimento.value;
    var genero = cadastrar.genero.value;
    var cpf = cadastrar.cpf.value;
    var celular = cadastrar.celular.value;
    var email = cadastrar.email.value;
    var senha = cadastrar.senha.value;
    var status = cadastrar.status.value;
    
    if(genero == ""){
        alert('Selecione o Gênero');
        formulario.genero.focus();
        return false;
    }
    
    if(email == "" || email.indexOf('@') == -1){
        alert('E-mail incorreto! Tente novamente');
        formulario.email.focus();
        return false;
    }
    
    if(senha == "" || senha.length <= 5){
        alert('Senha inserida incorretamente! Preencha com no mínimo 6 caracteres');
        formulario.senha.focus();
        return false;
    }
}
