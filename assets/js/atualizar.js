$('#formAtualizar').submit(function(e){
    e.preventDefault();

    const v_id = $('#id_funcionario_update').val();
    const v_salario = $('#salario').val();

    $.ajax({
        url: 'http://localhost:8080/MiniProject/lista/atualizar/atualizar.php',
        method: 'POST',
        data: {id: v_id,
            salario: v_salario
            },
        dataType: 'json'
    }).done(function(result){
        swal("Salvo", "Salário atualizado com sucesso!", "success");
        setTimeout(function () {
            window.location.href="http://localhost:8080/MiniProject/lista/lista.php";
        }, 2000);
        console.log(result);
    });

});

