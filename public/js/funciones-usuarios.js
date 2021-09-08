$(document).ready(function() {
    $("#data-user").on("submit",function(event)

    {
    
        var tipo = document.getElementById("tipo-user").value;

        if(tipo ==0)
        {

        alert("No slecciono el tipo de usuario...");
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
});