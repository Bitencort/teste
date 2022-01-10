var App_depoimentos = function () {

     var envia_imagem_depoimento = function () {


        $(document).on('change', '[name="user_foto_file"]', function () {


            var file_data = $('[name="user_foto_file"]').prop('files')[0]; //recupera as propriedades 

            var form_data = new FormData();


            form_data.append('user_foto_file', file_data);


            $.ajax({

                type: 'post',
                url: BASE_URL + 'restrita/depoimentos/upload_file',
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,

                beforeSend: function () {

                    //Definifir disables e pagar erros de validação

                    $('#user_foto').html('');

                },
                success: function (response) {

                    if (response.erro === 0) {


                        $('#box-foto-usuario').html("<input type='text' name='user_foto' value='" + response.user_foto + "'> <img width='100' alt='Usuário image' src='" + BASE_URL + "/uploads/depoimentos/small/" + response.user_foto + "' class='rounded-circle'>");

                    } else {


                        $('#user_foto').html(response.mensagem);

                    }

                },

                error: function (response) {

                    $('#user_foto').html(response.mensagem);

                }


            });



        });



    }




    return {

        init: function () {

            envia_imagem_depoimento();

        }

    }




}(); //Inicializa ao carregar a view



jQuery(document).ready(function () {

    $(window).keydown(function (event) {


        if (event.keyCode == 13) {

            event.preventDefault();
            return false;

        }


    });

    App_depoimentos.init();

});


