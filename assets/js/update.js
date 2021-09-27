$('#formAtualizar').submit(function(e){
    e.preventDefault();

    const v_id = $('#id_funcionario_update').val();
    const v_salario = $('#salario').val();

    $.ajax({
        url: 'http://localhost:8080/MiniProject/lista/update/update.php',
        method: 'POST',
        data: {id: v_id,
            salario: v_salario
            },
        dataType: 'json'
    }).done(function(result){
        window.location.href="http://localhost:8080/MiniProject/lista/lista.php";
        console.log(result);
    });

});

