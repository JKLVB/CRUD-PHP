import {validacao as validar} from './validacao.js';

$('#formCadastro').submit(function(e){
    e.preventDefault();

    const nome = $('#nome').val();
    const login = $('#login').val();
    const senha = $('#senha').val();
    const cpf = $('#cpf').val();
    const salario = $('#salario').val();
    const cargo = $('input[name="cargo"]:checked').val();

    //method imported ./validacao.js
    validar(nome, login, senha, cpf, salario, cargo);

    $.ajax({
        url: '/CRUD-PHP/cadastro/cadastro.php',
        method: 'POST',
        data: {nome: nome,
            login: login,
            senha: senha,
            cpf: cpf,
            salario: salario,
            cargo: cargo
        },
        dataType: 'json'
    }).done(function(result){

        console.log(result);

        if(result != false){
            if(v_login == result[0].login){
                swal("Falha", "O login inserido está sendo utilizado!", "error");
                formCadastro.login.focus();
            }
            else if(v_cpf == result[0].cpf){
                swal("Falha", "O CPF inserido já foi cadastrado!", "error");
                formCadastro.cpf.focus();

            }
        }else{
            swal("Salvo", "Usuário cadastrado com sucesso!", "success");

            
            setTimeout(function () {
                window.location.href="/CRUD-PHP/lista/lista.php";
            }, 2000);
        }
    });
});