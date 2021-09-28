$(document).ready(function() {
    $("#data-user").on("submit",function(event)

    {
    
        var tipo = document.getElementById("tipo-user").value;

        if(tipo ==0)
        {

        alert("No selecciono el tipo de usuario...");
        }
        else
        {
            var formData =  new FormData (document.getElementById("data-user"));
            formData.append("dato","valor");

            $.ajax({
                url:"usuarios/save_user.php",
                type: "POST",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false

            })
            .done(function(res){
                $("#result-form").html(res);
            });
        }
        event.preventDefault();

    });

    /* Cambiar estado */
    $(".btnHDUser").click(function(event){
        var id, estado;
        id = $(this).attr("id-user");
        estado = $(this).attr("estado");

        $("#result-form").load("usuarios/cambiar_estado.php?idusuario="+id+"&estado="+estado);
        event.preventDefault();
    });
 
    /*Cargar modal Actualizar Usuario */
    $(".updateUser").click(function(){
        var id = $(this).attr("id-user");
        $('#UserUpd').modal('show');
        $("#dataUser").load("usuarios/updateDataUser.php?idusuario="+id);
    });

    /* Actualizar nombre usuario y tipo */
    $("#UpdUser").on("submit",function(event)
    {
        var formData =  new FormData (document.getElementById("UpdUser"));
        formData.append("dato","valor");

         $.ajax({
            url:"usuarios/update_user.php",
            type: "POST",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false

        })
        .done(function(res){
            $("#result-form").html(res);
         });
        event.preventDefault();
    });

     /*Cambiar Modal para actualizar clave*/
    $(".upd-key").click(function () {
        var id = $(this).attr("id-user");
        $('#modalKeyUpd').modal('show');
        $("#passUser").load("usuarios/updateData_pass.php?idusuario=" + id);
    });   
    
    /* Actualizar contraseña */
    $("#UpdPass").on("submit",function(event)
    {
        var formData =  new FormData (document.getElementById("UpdPass"));
        formData.append("dato","valor");

         $.ajax({
            url:"usuarios/update_passw.php",
            type: "POST",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false

        })
        .done(function(res){
            $("#result-form").html(res);
         });
        event.preventDefault();
    });

    //Modal para eliminar usuarios.
    $(".BtnDrop-user").click(function(event) {
        var id;
        id = $(this).attr("id-user");
        $("#result-form").load("usuarios/delete_user.php?idusuario="+id);
        event.preventDefault();
    });

    $(".txt-sys").click(function() {
        if (confirm('Estas seguro que deseas eliminar el Usuario'))
        {
            location.href = "../../index.php";
        } else {
            alert('Cancelado ...');
        }
    });



    /*aumenta n° registro para el paginado*/
    $("#select-reg").on('change', function(event){
        var valor;
        valor = $("#select-reg option:select").val();
        $("#contenido").load("uusario/principal.php?num_reg="+ valor);
        event.preventDefault();
    });

    /*busca el usuario*/
    $("#like-user").on('change', function(event){
         var valor;
        valor = $("#like-user").val();
        if(valor.trim() == "");
             alertify.alert

    });

    /*cargar modal para actualizar clave*/
    $("upd-key").click(function(){ 
        $('#modalkeyUpd').modal('show');

    });

    /*cargar modal para actualizar usuario*/
    $("upd-user").click(function(){ 
       $('#UserUpd').modal('show');

    });

    /*paginado*/
    $("a pagina").click(function(event){
        var num, reg;
        num = $(this).attr("v-num");
        reg = $(this).attr("num-reg");
        $("#contenido").load("usuarios/principal.php?num=" +  num + "&num_reg=" + reg );
        Event.preventDefault();
   });

   /*Aumenta N° registros para el paginado*/
   $("#select-reg").on('change', function(event){
       var valor;
       valor = $("#select-reg option: selected").val();
       $("#contenido").load("usuarios/principal.php?num_reg=" + valor);
        Event.preventDefault();
   });
 /*Aumenta N° registros para el paginado*/
 $("#select-reg").on('change', function(event){
    var valor;
    valor = $("#select-reg option: selected").val();
    $("#contenido").load("usuarios/principal.php?num_reg=" + valor);
     event.preventDefault();
});
  /*busca el usuario*/ 
  $("#like-user").on('change', function(event){
      var valor;
      valor = $("#like-user").val();
      if(valor.trim ()=="")
      {
        alertify.alert("Busca Usuario", "No ingreso el nombre ó codigo de usuario a buscar...")
        event.preventDefault();
      }
      else
      { // alert (valor);
        $("#contenido").load("usuarios/principal.php?like=1 &valor=" + valor);
       // event.preventDefault();
        
      }
  });

});
