function validar(){
    var nome = formCadastro.nome.value;
    var login = formCadastro.login.value;
    var senha = formCadastro.senha.value;
    var cpf = formCadastro.cpf.value;
    var salario = formCadastro.salario.value;
    var cargo = formCadastro.cargo.value;
    var validarCpf = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;

    if(nome == ""){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        formCadastro.nome.focus();
        return false;
    }
    if(login == ""){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        formCadastro.login.focus();
        return false;
    }
    if(senha == ""){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        formCadastro.senha.focus();
        return false;
    }
    if(validarCpf.test(cpf) == false){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        formCadastro.cpf.focus();
        return false;
    }
    if(salario == ""){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        formCadastro.salario.focus();
        return false;
    }
    if(cargo == ""){
        swal("Falha", "O preenchimento dos campos é obrigatório", "warning");
        return false;
    }
}