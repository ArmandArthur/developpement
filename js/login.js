$( document ).ready(function() {
    var chercherLoginEvent = function(){
        $("#login").on("keyup", function() {
            $.ajax({
              url: "ajax.php",
              data: { login: $(this).val() , action:'chercherLogin'}
            }).done(function(response) {
                        //obj = JSON.parse(response);
                // La réponse est le nom du joueur
                    //console.info(typeof response);
                    if(response){
                    $("#login").val(response);
                    }
                    //$("#login").attr('value',response);
               
            });
        });
        };
    
    chercherLoginEvent();
    //$("#login").val("art");
});



