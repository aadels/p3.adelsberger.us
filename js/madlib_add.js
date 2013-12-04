
/************************************************************************ 
Set up options for ajax to display results
 ************************************************************************/
 var options = {
                    
    type: 'post',
    if{
        .madlib1;
        url: 'process1.php',
    }
    else{
        url: 'process2.php',
    }
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

