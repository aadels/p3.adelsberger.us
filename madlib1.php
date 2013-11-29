<!DOCTYPE html>
<html>
    <head>
        <title>Madlibs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/respond.js"></script>   
        <link type="text/css" rel="stylesheet" href="/css/madlib.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/css/styles.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
               
    </head>

    <body>  
        <div id="wrapper">
            <!-- row 1: navigation -->
            <div id='menu'>
                    <!-- navigation-->
                <div class="row">   
                    <nav class="navbar" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href='/'><img src="images/logo.png" id="logo" alt="logo"></a>
                            </div>
                            <div class="collapse navbar-collapse pull-right" role="navigation" id="collapse">
                                <ul class="nav navbar-nav">
                                    <!-- Menu for users who are logged in-->    
                                        <li> 
                                            <a href='/posts/add'>Post</a> 
                                        </li>
                                       
                                </ul>
                            </div>
                        </div><!--close container-->    
                    </nav>
                </div><!--close row-->  
                
            </div><!--close menu--> 

            <div class="container">
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

                <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p>Madlibs<br></p>
                      
                    </div>
                    <div class="col-xs-6">
                        <p class="right pull-right">Ann Adelsberger<br>
                            CSCI E-15 Project 3<br>
                            Fall 2013<br>
                            <a href="mailto:adelsbergerann@gmail.com">adelsbergerann@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- footer -->
      
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

