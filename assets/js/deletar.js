function deletar() {

    $('.delete-btn').click(function (e) { 
        e.preventDefault();
    
        let idUsuario = $(this).data('id')

        swal({
            title: "Atenção!",
            text: "O usuário cadastrado será excluído do banco de dados. Deseja continuar?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    url: 'http://localhost:8080/CRUD-PHP/lista/deletar/deletar.php',
                    method: 'POST',
                    data: {idUsuario: idUsuario},
                    dataType: 'json'
                }).done(function(result){
                    console.log(result);

                    if(result == true){
                        swal("Usuário excluido com sucesso!", {
                            icon: "success",
                          });
                        setTimeout(function () {
                            window.location.href="http://localhost:8080/CRUD-PHP/lista/lista.php";
                        }, 1500);
                    }else{
                        swal("Erro ao excluir o usuário", {
                            icon: "error",
                          });
                    }
                });
            } else {

            }
          });
    });
};