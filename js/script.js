var isAttaqueActive = false;

$( document ).ready(function() {
	var seDeplacerEvent = function(){
		$(".icon_fleche").on("click", function() {
			$.ajax({
			  url: "ajax.php",
			  data: { positionX: $(this).attr('datapositionx'), positionY: $(this).attr('datapositiony') , action:'seDeplacer'}
			}).done(function(response) {
                                updateDiv(response);
				seDeplacerEvent();
                                if(isAttaqueActive){
                                    attaqueEvent();    
                                }

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
                        if(isAttaqueActive){
                            attaqueEvent();    
                        }
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
        
        var redimensionnnerMap = function()
        {
            var nombreIconLargeur = $("div[class^='icon'][datapositiony=0]").length;
            var nombreIconHauteur = $("div[class^='icon'][datapositionx=0]").length;;
            $("#map").css('height', 33*nombreIconHauteur);
            $("#map").css('width', 45*nombreIconLargeur);
        };
        
        var selectActionEvent = function(){
            $(".actionPersonnage").on("click",function() {
                if($(this).hasClass("active")){
                    $(".personnage").unbind('click');
                    $(this).removeClass("active");
                    $('#message').hide();
                    isAttaqueActive = false;
                }
                else{
                    $(this).addClass("active");
                    attaqueEvent();
                    isAttaqueActive = true;
                }
            });
        };
        
        var attaqueEvent = function(){
            $(".personnage").bind("click", function() {
                $.ajax({
                  url: "ajax.php",
                  data: { personnageAttaquerId: $(this).attr('dataid') , action:'attaquer'}
                }).done(function(response) {
                        updateDiv(response);
                        seDeplacerEvent();
                        attaqueEvent();
                });
            });  
        };
        seDeplacerEvent();
        selectPersonnageEvent();
        redimensionnnerMap();
        selectActionEvent();
});
