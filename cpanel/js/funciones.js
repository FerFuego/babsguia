
function showMe(){
     document.getElementById('login_container').style.display ='inherit';
    $('#login_container').show('slow');
     document.getElementById('login').style.display ='inherit';
}//------------usado----------------

$(document).ready(function(){
    var window_height = $(window).height();
    var page_height = $('#header').height() + $('#content').height();
    var footer_height = $('#footer').height();

    if (page_height < window_height) {
        margin_footer = window_height - page_height - footer_height - 0;
        $('#footer').css('margin-top', margin_footer);
    }
});//------------usado footer bottom----------------

function esconder_login(){
    $("#login_container").fadeOut('slow');
}//------------usado----------------


function realizaProceso(usuario, contrasena){
    var parametros = {
            "usuario" : usuario, 
         "contrasena" : contrasena
                    };
    $.ajax({
            data:  parametros,
            url:   'cpanel/login.php',
            type:  'post',
            //envia informacion
            beforeSend: function () {
                $("#resultado").html("Procesando...");
            },
            //recibe los resultados
            success:  function (response) {
                $("#resultado").html(response);
            }
        });
}//------------usado----------------