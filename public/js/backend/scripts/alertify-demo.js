$(function(){
    // Set Theme Style
    alertify.theme('bootstrap');
    $('#alertify-theme input').change(function(){
        alertify.theme(this.value);
    });
    
    // Alert
    $('.alertify-1').click(function(){alertify.alert("Message"); });
    
    // Confirm
    $('.alertify-2').click(function(){ alertify.confirm("Message", function () {
           alertify.success("You've clicked OK");
        }, function() {
           alertify.error("You've clicked Cancel");
        }); 
    });
    
    // Prompt
    $('.alertify-3').click(function(){
        alertify
           .defaultValue("Default Value")
           .prompt("This is a prompt dialog",
                function (val, ev) {
                  ev.preventDefault();
                  alertify.success("You've clicked OK and typed: " + val);
                }, function(ev) {
                  ev.preventDefault();
                  alertify.error("You've clicked Cancel");
                }
            )
        
    });
    
    // Button Lables
    $('.alertify-4').click(function(){
        alertify
          .okBtn("Success")
          .cancelBtn("Cancel")
          .confirm("Confirm dialog with custom button labels", function (ev) {
              ev.preventDefault();
              alertify.success("You've clicked OK");
          }, function(ev) {
              ev.preventDefault();
              alertify.error("You've clicked Cancel");
        });
    });

    // Multiple Dialog
    $('.alertify-5').click(function(){
        alertify.confirm("Confirm?", function (ev) {
            ev.preventDefault();
            alertify.alert("Successful AJAX after OK");
        }, function(ev) {
            ev.preventDefault();
            alertify.alert("Successful AJAX after Cancel");
        });
    });
});