

$(document).ready(function () {
    var initEvent = function () {
        activerEvent();
        seDeplacerEvent();
        selectPersonnageEvent();
        redimensionnnerMap();
        selectActionEvent();
        effectMessage();
    };

    var seDeplacerEvent = function () {
        $(".icon_fleche").on("click", function () {
            $.ajax({
                url: "ajax.php",
                data: {positionX: $(this).attr('datapositionx'), positionY: $(this).attr('datapositiony'), action: 'seDeplacer'}
            }).done(function (response) {

                $('#jeu').html(response);
                initEvent();


            });
        });
    };

    var selectPersonnageEvent = function () {
        $("#selectPersonnage").change(function () {
            $.ajax({
                url: "ajax.php",
                data: {selectedPersonnage: $(this).val(), action: 'selectPersonnage'}
            }).done(function (response) {
                $('#jeu').html(response);
                initEvent();
            });
        });
    };


    var redimensionnnerMap = function ()
    {
        var nombreIconLargeur = $("div[class^='icon'][datapositiony=0]").length;
        var nombreIconHauteur = $("div[class^='icon'][datapositionx=0]").length;
        ;
        $("#map").css('height', 33 * nombreIconHauteur);
        $("#map").css('width', 45 * nombreIconLargeur);
    };

    var selectActionEvent = function () {
        
        $(".actionPersonnage").on("click", function () {
            if ($(this).hasClass("active")) {
                $(".personnage").unbind('click');
                $(this).removeClass("active");
                $('#message').hide();
            }
            else {
                $(this).addClass("active");
                attaqueEvent();
            }
        });
    };

    var attaqueEvent = function () {
        $(".personnage").bind("click", function () {
            $.ajax({
                url: "ajax.php",
                data: {personnageAttaquerId: $(this).attr('dataid'), action: 'attaquer'}
            }).done(function (response) {
                $('#jeu').html(response);

                initEvent();
            });
        });
    };

    var activerEvent = function () {
        $("#finDeTour").bind("click", function () {
            $.ajax({
                url: "ajax.php",
                data: {action: 'activer'}
            }).done(function (response) {
                console.info(response);
                $('#jeu').html(response);
                initEvent();
            });
        });
    };
    
    var effectMessage = function(){
      if($("#message").find('.warning').length > 0){
         $("#message").animate({'top':0},600).delay( 2000 ).animate({'top':-$("#message").height()},600);
      }  
    };
    initEvent();
});
