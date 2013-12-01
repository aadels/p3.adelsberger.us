<!DOCTYPE html>

<html>

<head>
     <link type="text/css" rel="stylesheet" href="/css/madlib.css">      
     <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"> 
</head>

<body>

        <form class="madlib_form" method='post'>
        	<fieldset id= "form-fieldset">
	            Animal: <input type="text" id='madlib' name="input1" required size=20><br>
	            Adjective: <input type="text" id='madlib' name="input2" required size=20><br>
	            Room in a house: <input type="text" id='madlib' name="input3" required size=20><br>
	            Occupation: <input type="text" id='madlib' name="input4" required size=20><br>
	            Type of bird: <input type="text" id='madlib' name="input5" required><br>
	            Type of dog: <input type="text" id='madlib' name="input6" required><br>
	            Noun: <input type="text"  id='madlib' name="input7" required><br>
	            Adjective: <input type="text" id='madlib' name="input8" required><br>
	            Adjective: <input type="text" id='madlib' name="input9" required><br>
	            Name of a city: <input type="text" id='madlib' name="input10" required><br>
	            Animal: <input type="text" id='madlib' name="input11" required><br>
	            Adjective: <input type="text" id='madlib' name="input12" required><br>
	            Adjective: <input type="text" id='madlib' name="input13" required><br>
	            Adjective: <input type="text" id='madlib' name="input14" required><br>

	            <input type='submit' class="button" value='See Mad-lib!'> 
	        </fieldset>          
        </form>

            
                <div id='results'></div>
            
                
       
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src='js/jquery.form.js'></script>
        <script type="text/javascript" src='js/jquery.validate.js'></script>
        
        <script>
        
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
               
     
        </script>
        
        
</body>
</html>
