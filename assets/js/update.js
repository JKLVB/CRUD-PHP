$('#formAtualizar').submit(function(e){
    e.preventDefault();

    const v_salario = $('#salario').val();
    const v_id = $('#id_funcionario_update').val();

    $.ajax({
        url: 'http://localhost:8080/MiniProject/lista/update/update.php',
        method: 'POST',
        data: {salario: v_salario,
                id: v_id
            },
        dataType: 'json'
    }).done(function(result){
        window.location.href="http://localhost:8080/MiniProject/lista/lista.php";
        console.log(result);
    });

});

