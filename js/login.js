$( document ).ready(function() {
	var loginEvent = function(){
            $("#login").on("keyup", function() {
                $.ajax({
                  url: "ajax.php",
                  data: { login: $(this).val() , action:'seLoguer'}
                }).done(function(response) {
                    if(response){
                        document.location.href = 'jeu.php';
                    }
                });
            });
	};
        loginEvent();
});


