$('#formCadastro').submit(function(e){
    e.preventDefault();

    const v_nome = $('#nome').val();
    const v_login = $('#login').val();
    const v_senha = $('#senha').val();
    const v_cpf = $('#cpf').val();
    const v_salario = $('#salario').val();
    const v_cargo = $('input[name="cargo"]:checked').val();

    $.ajax({
        url: 'http://localhost:8080/MiniProject/cadastro/cadastro.php',
        method: 'POST',
        data: {nome: v_nome,
            login: v_login,
            senha: v_senha,
            cpf: v_cpf,
            salario: v_salario,
            cargo: v_cargo
        },
        dataType: 'json'
    }).done(function(result){
        window.location.href="http://localhost:8080/MiniProject/lista/lista.php";
        console.log(result);
    });
});