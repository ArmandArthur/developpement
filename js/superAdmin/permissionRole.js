$( document ).ready(function() {
    var selectRoleEvent = function(){
        $("#roleId").on("change", function() {
            $.ajax({
              method:'POST',
              url: "superAdminPermissionRole.php",
              data: { roleId: $(this).val() , action:'modifier'}
            }).done(function(response) {
               if(response == 1)
               {
                   window.location.reload();
               }
            });
        });
    };
    selectRoleEvent();
});

