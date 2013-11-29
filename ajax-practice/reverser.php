<!DOCTYPE html>

<html>

<head>
                
</head>

<body>

        <form>
                <form method='post' name="madlib_form">
					Type of animal: <input type="text" id='madlib' name="input1" size=20><br>
					Adjective: <input type="text" id='madlib' name="input2" size=20><br>
					Room in a house: <input type="text" id='madlib' name="input3" size=20><br>
					Occupation: <input type="text" name="input4" id='madlib' size=20><br>
					Type of bird: <input type="text" id='madlib' name="input5" size=20><br>
					Type of dog: <input type="text" id='madlib' name="input6" size=20><br>
					Noun: <input type="text" name="input7" id='madlib' size=20><br>
					Adjective: <input type="text" name="input8" id='madlib' size=20><br>
					Adjective: <input type="text" name="input9" id='madlib' size=20><br>
					Name of a city <input type="text" name="input10" id='madlib' size=20><br>
					Animal: <input type="text" name="input11" id='madlib' size=20><br>
					Adjective: <input type="text" name="input12" id='madlib' size=20><br>
					Adjective: <input type="text" name="input13" id='madlib' size=20><br>
					Noun: <input type="text" name="input14" id='madlib' size=20><br>
					Adjective: <input type="text" name="input15" id='madlib' size=20><br>
        
	                <input type='submit' value='See Mad-lib!'>
	                <div id='results'></div>
	                
        </form>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src='jquery.form.js'></script>
        
        <script>
        
                var options = {
                        type: 'post',
                        url: 'process.php',
                        beforeSend: function() {
		                    // Display a loading message while waiting for the ajax call to complete
		                    $('#results').html("Loading...");
                		},
                        success: function(response) {
                            $('#results').html(response);
                            if(response.success){
            					$("madlib_form").hide()
            				}		
                            //$("form").hide();
                        } 
                        
                };

                $('form').ajaxForm(options);
            	$('form').submit(function(){
				    return false;
				});


        
        </script>
        
        
</body>
</html>