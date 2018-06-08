 function ajax(ruta,forma,destino){
    $.ajax({
        type: 'POST',
        url: ruta+".php",
        data: $('#'+forma).serialize(),
        success: function(data) {
            $('#'+destino).html(data);
        }
    });  
}

function ingreso(){
		ajax("valida","forma_ingreso","divregistro");
}