

//Set up variable for form by its id attribute
var form_id  = $('form').attr('id');

//if the id for form 1 is chosen, post results in process1 text if not post in process2 text
if(form_id == 'madlib1') {
   process_url = "process1.php";
}
else {
  process_url = "process2.php";
}
// Set up the options for ajax
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
