$( document ).ready(function() {
	var seDeplacerEvent = function(){
		$(".icon_fleche").on("click", function() {
			$.ajax({
			  url: "ajax.php",
			  data: { positionX: $(this).attr('datapositionx'), positionY: $(this).attr('datapositiony') , action:'seDeplacer'}
			}).done(function(response) {
                                updateDiv(response);
				seDeplacerEvent();
			});
		});
	};	
        
        var selectPersonnageEvent = function(){
            $( "#selectPersonnage" ).change(function() {
                $.ajax({
                  url: "ajax.php",
                  data: { selectedPersonnage: $(this).val(), action:'selectPersonnage'}
                }).done(function(response) {
                        updateDiv(response);
                        seDeplacerEvent();
                        $('#message').hide();
                });
            });
        };
        
        var updateDiv = function(response)
        {
            var objet = $.parseJSON(response);
            for (var key in objet)
            {
                    $('#'+key).html(objet[key]).show();
            } 
        };
        seDeplacerEvent();
        selectPersonnageEvent();
});
