$( document ).ready(function() {
    var supprimerEvent = function(){
        $(".mif-cross").on("click", function() {
            alert('ok');
            // Récupération de l'id joueur
            var joueurId = $(this).find('span').html();
            
            // Requête de suppression
            $.ajax({
              method:'POST',
              url: "superAdminJoueurRole.php",
              data: { joueurId: joueurId , action:'supprimer'}
            }).done(function(response) {
               if(response == 1)
               {
                   window.location.reload();
               }
            });
        });
    };
    supprimerEvent();
});

