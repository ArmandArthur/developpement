$( document ).ready(function() {
	var seDeplacer = function(){
		$(".icon_fleche").on("click", function() {
			$.ajax({
			  url: "ajax.php",
			  data: { positionX: $(this).attr('datapositionx'), positionY: $(this).attr('datapositiony') , action:'seDeplacer'}
			}).done(function(response) {
				var objet = $.parseJSON(response);
				for (var key in objet){
					$('#'+key).html(objet[key]);
				}
				seDeplacer.call();
			});
		});
	}
	seDeplacer.call();
});
