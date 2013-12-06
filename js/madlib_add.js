
// Set up the options for ajax


//var value = $('#madlib1').html();
var form_id  = $('form').attr('id');
 console.log(form_id);
//#madlib1 is the id of one of the two forms
if(form_id == 'madlib1') {
   process_url = "process1.php";
}
else {
  process_url = "process2.php";
}
var options = {
                        
        type: 'post',
        url: process_url,
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
