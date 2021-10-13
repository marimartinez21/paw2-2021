//funcion  para pre-visualizar imagen  antes de gaurdar productos

function readURL(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            //Asignamos el atributo arc a la tag de la imagen
            $ ('#muestraimagen') .attr ('scr') , e.target.result ;
        }
        reader.readAsDataURL(input.files [0]);

    }

    //el listenr va  asignado al inpu
    $ ("#imagen")  .change (function() {
        readURL(this);
    });
}