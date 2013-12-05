
// Set up the options for ajax

var madlib;
//var form2 = '#madlib2';

//#madlib1 is the id of one of the two forms
if(madlib =='#madlib1') {  
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

else if (madlib =='#madlib2'){
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

}
