
// Set up the options for ajax
/*global $, jQuery, alert*/
"use strict";
var form1 = $('madlib1.html');
var form2 = $('madlib2.html');

if(form1) {  
    var options1 = {
                        
        type: 'post',
        url: 'process1.php',
        beforeSend: function() {   
            //Display a loading message while waiting for the ajax call to complete
            "use strict";
            $('#results').html("Loading...");
        },
            //Hide form and display results
        success: function(response) {
            "use strict";
            $(".madlib_form").hide();
            $('#results').html(response);
        }
    };

    $('form').ajaxForm(options1);
}

else {
    var options2 = {
                        
        type: 'post',
        url: 'process2.php',
        beforeSend: function() {   
            //Display a loading message while waiting for the ajax call to complete
            "use strict";
            $('#results').html("Loading...");
        },
        //Hide form and display results
        success: function(response) {
            "use strict";
            $(".madlib_form").hide();
            $('#results').html(response);
        }
    };

    $('form').ajaxForm(options2);

}