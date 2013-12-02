<?php

class madlib_controller extends base_controller{

	   public function __construct() {
        parent::__construct();
      
    } 


	public function add(){

		//Set up view
		$this ->template->content = View::instance('v_madlib_add');
		$this->template->title = "Madlib!";

		//Load JS files
        $client_files_body = Array(
        	'/js/madlib_add.js', 
        	'/js/jquery.form.js'
        	'/js/form_submit.js'
        );

        $this->template->client_files_body = Utils::load_client_files($client_files_body);


		//Render Template
		echo $this->template;
	}	

	 

}//end of the class
	
