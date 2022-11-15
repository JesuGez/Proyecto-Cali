if (window.location.host == 'localhost:8080') {
    var BASE_URL = "http://localhost:8080/";
} else {
    var BASE_URL = "http://t.yaledigocomo.com/";
}

let colorPicker = document.getElementById('colorPicker')

colorPicker.addEventListener('input', e =>  {

    let parametizable = document.getElementById('background')
    background.style.background = e.target.value

})



 

//Cargo menu
$(function () {

    
 
    usuario_id = $('#id_usuario').val();
    urlAlta = 'Usuarios/get_menu';
    $.ajax({
        url: BASE_URL + urlAlta,
        data: { usuario_id: usuario_id },      
        type: 'POST',
        dataType: 'json',
        success: function (data) { 
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
               
                html += '<a class="dropdown-item" href="' + BASE_URL +  data[i].url + '">' +
                '<div class="media">' +
                '<div class="user-img">' +
                '<div class="avatar avatar-xl">' +
                '<span class="avatar-title rounded-circle">' + data[i].numero_modulo + '</span> </div> </div>' +
                '<div class="media-body" >' +
                '<div class="" >' +
                '<h5 class="usr-name">' + data[i].nombre_modulo + '</h5>' +
                '<p class="msg-title">' + data[i].nombre_programa + '</p>' +
                '</div></div></div></a>'; 
            } 
          
            $('#DataResult_cabecera').html(html);          
            
        },
        error: function (xhr, status, error) {
            alert(xhr + status + error);
        }
    })

})

$(function () {
    usuario_id = $('#id_usuario').val();
    urlAlta = 'Usuarios/get_mensajes';
    $.ajax({
        url: BASE_URL + urlAlta,
        data: { usuario_id: usuario_id },      
        type: 'POST',
        dataType: 'json',
        success: function (data) { 
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
               
                html += '<a class="dropdown-item" href="' + BASE_URL +  data[i].url + '">' +
                '<div class="media server-log">' +
                '<div class="user-img">' +
                '<div class="avatar avatar-xl">' +
                '<span class="avatar-title rounded-circle">' + data[i].tipo_mensaje + '</span> </div> </div>' +
                '<div class="media-body" >' +
                '<div class="data_info" >' +
                '<h6 class="">' + data[i].nombre_mensaje + '</h6>' +
                '<p class="">' + data[i].leido_mensaje + '</p>' +
                '</div></div></div></a>'; 
            } 
          
            $('#DataMensajes').html(html);          
            
        },
        error: function (xhr, status, error) {
            alert(xhr + status + error);
        }
    })

})











      