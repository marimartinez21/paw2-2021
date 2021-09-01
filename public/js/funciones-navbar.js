$(document). ready(function()  {
    /* Cargar vista usuarios*/
    $(".user").click(function(event) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    });
    /* Btn Salir */
    $(".exit-sys").click(function() {
        if (confirm('Seguro/a en cerrar sesión'))
        {
            location.href = "../../index.php";
        } else {
            alert('Cierre de sesión cancelado...');
        }
    });
});