
// Set up the options for ajax


//var value = $('#madlib1').html();
var form_id  = $('form').attr('id');
 console.log(form_id);
//#madlib1 is the id of one of the two forms
if(form_id == 'madlib1') {  
    var options = {
                        
        type: 'post',
        url: 'process1.php',
        beforeSend: function() {   
        //Display a loading message while waiting for the ajax call to complete
            $('#results').html("Loading...");
        },
        //Hide form and display results
        success: function(response) {
            console.log(id);
            $(".madlib_form").hide();
            $('#results1').html(response);
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
            $('#results2').html(response);
        }
    };

    $('form').ajaxForm(options);

}
