$( document ).ready(function() {
    var changerJoueurEvent = function(){
        $("#menuJoueurId").on("change", function() {
            $.ajax({
              url: "ajax.php",
              data: { joueurId: $(this).val() , action:'changerJoueur'}
            }).done(function(response) {
                if(response == 1){
                    document.location.reload();
                }
            });
        });
    };
    changerJoueurEvent();
});

