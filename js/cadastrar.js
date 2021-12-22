function validar(){

    var nome = cadastrar.nome.value;
    var nascimento = cadastrar.nascimento.value;
    var genero = cadastrar.genero.value;
    var cpf = cadastrar.cpf.value;
    var celular = cadastrar.celular.value;
    var email = cadastrar.email.value;
    var senha = cadastrar.senha.value;
    var status = cadastrar.status.value;
    
    if(nome == ""){
        alert('Nome inválido');
        cadastrar.nome.focus();
        return false;
    }

    if(nascimento == ""){
        alert('Coloque uma data de nascimento');
        cadastrar.nascimento.focus();
        return false;
    }

    if(genero == ""){
        alert('Selecione o Gênero');
        cadastrar.genero.focus();
        return false;
    }

    if(cpf == ""){
        alert('CPF inválido');
        cadastrar.cpf.focus();
        return false;
    }

    if(celular == ""){
        alert('Digite o número do celular com o DDD');
        cadastrar.celular.focus();
        return false;
    }

    if(email == ""){
        alert('E-mail incorreto! Tente novamente');
        cadastrar.email.focus();
        return false;
    }
    
    if(senha == "" || senha.length <= 5){
        alert('Senha inserida incorretamente! Preencha com no mínimo 6 caracteres');
        cadastrar.senha.focus();
        return false;
    }

    if(status == ""){
        alert('Defina o Status de Atividade');
        cadastrar.status.focus();
        return false;
    }
}
