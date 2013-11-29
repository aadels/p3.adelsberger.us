<!DOCTYPE html>

<html>

<head>
     <link type="text/css" rel ="stylesheet" href="/css/madlib.css">
     <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">       

</head>

<body>

        <form class="madlib_form" method='post'>
        	<fieldset id= "form-fieldset">
	            Animal: <input type="text" id='madlib' name="input1" required size=20><br>
	            First name: <input type="text" id='madlib' name="input2" required size=20><br>
	            Plural Noun: <input type="text" id='madlib' name="input3" required size=20><br>
	            Plural Noun: <input type="text" id='madlib' name="input4" required size=20><br>
	            First name: <input type="text" id='madlib' name="input5" required size=20><br>
	            Plural noun: <input type="text"  id='madlib' name="input7" required size=20><br>
	            Verb in past tense: <input type="text" id='madlib' name="input8" required size=20><br>
	            Plural noun: <input type="text" id='madlib' name="input9" required size=20><br>
	            Adjective ending in "est": <input type="text" id='madlib' name="input10" required size=20><br>
	            Place: <input type="text" id='madlib' name="input11" required size=20><br>

	            <input type='submit' class="button" value='See Mad-lib!'> 
	        </fieldset>          
        </form>
    
        <fieldset id= "result-fieldset">
            <div id='results'></div>
        </fieldset>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src='js/jquery.form.js'></script>
        <script type="text/javascript" src='js/jquery.validate.js'></script>
        
        <script>
        
                var options = {
                    
                    type: 'post',
                    url: 'process3.php',
                    beforeSend: function() {   
                        // Display a loading message while waiting for the ajax call to complete
                        $('#results').html("Loading...");
                    },
                    
                    success: function(response) {
                        $(".madlib_form").hide();
                        $('#results').html(response);
                	}
                };

                $('form').ajaxForm(options);
               
     
        </script>
        
        
</body>
</html>

