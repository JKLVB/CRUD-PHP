function validacao(){
    var nome = formCadastro.nome.value;
    var login = formCadastro.login.value;
    var senha = formCadastro.senha.value;
    var cpf = formCadastro.cpf.value;
    var salario = formCadastro.salario.value;
    var cargo = formCadastro.cargo.value;
    var validarCpf = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;

    if(nome == ""){
        alert('O campo "Nome" não foi preenchido');
        formCadastro.nome.focus();
        return false;
    }
    if(login == ""){
        alert('O campo "Login" não foi preenchido');
        formCadastro.login.focus();
        return false;
    }
    if(senha == ""){
        alert('O campo "Senha" não foi preenchido');
        formCadastro.senha.focus();
        return false;
    }
    if(validarCpf.test(cpf) == false){
        alert('CPF inválido');
        formCadastro.cpf.focus();
        return false;
    }
    if(salario == ""){
        alert('O campo "Salário" não foi preenchido');
        formCadastro.salario.focus();
        return false;
    }
    if(cargo == ""){
        alert('A opção de "Cargo" não foi preenchido');
        return false;
    }
}