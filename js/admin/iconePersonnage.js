$(document).ready(function ()
{
    var initEvent = function () 
    {
        effectMessage();
    };
    
    var effectMessage = function()
    {
      if($("#message").find('.success').length > 0){
         $("#message").animate({'top':0},600).delay( 2000 ).animate({'top':-$("#message").height()},600);
      }  
    };
    
    initEvent();
});
