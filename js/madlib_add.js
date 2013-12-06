if($('form').attr('id') == 'madlib1') {
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
