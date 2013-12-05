
/* Set up the options for ajax

var form1 = '#madlib1';
//var form2 = '#madlib2';

//#madlib1 is the id of one of the two forms
if(form1) {  
    var options = {
                        
        type: 'post',
        url: 'process1.php',
        beforeSend: function() {   
        //Display a loading message while waiting for the ajax call to complete
            $('#results').html("Loading...");
        },
        //Hide form and display results
        success: function(response) {
            $(".madlib_form").hide();
            $('#results').html(response);
        }
    };

    $('form').ajaxForm(options);
}

else {
    var options = {
                        
        type: 'post',
        url: 'process2.php',
        beforeSend: function() {   
        //Display a loading message while waiting for the ajax call to complete
            $('#results').html("Loading...");
        },
        //Hide form and display results
        success: function(response) {
            $(".madlib_form").hide();
            $('#results').html(response);
        }
    };

    $('form').ajaxForm(options);

}*/

var form1 = "madlib1.html";
var form2 = "madlib2.html";

if(form1) {  
    var options = {
        type: 'post';
        url: 'process1.php';
    }
}
else {
    var options = {
        type: 'post';
        url: 'process2.php';
    }
}
   
    beforeSend: function() {   
    //Display a loading message while waiting for the ajax call to complete
        $('#results').html("Loading...");
    },
    //Hide form and display results
    success: function(response) {
        $("#form-fieldset").hide();
        $('#results').html(response);
    }
};
$('form').ajaxForm(options);