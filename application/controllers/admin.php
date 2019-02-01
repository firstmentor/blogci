<?php
class Admin extends MY_Controller
{
   public function index()
   { 

   	  //helper load
   	 // $this->load->helper("url");
   	 //link tag (helper) load
   	 //$this->load->helper("html");

       //echo "hello admin";

   	  //$this->load->view('users/articlelist');


   	//Load from Library 
   	$this->load->library('form_validation');
   	$this->form_validation->set_rules('uname','User Name','required|alpha');  //rule define  validation
   	$this->form_validation->set_rules('pass','Password','required|max_length[10]');  //rule define validation

   	// read text validation

   	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    




   	if($this->form_validation->run()) //run validation
   	{
   		echo "Validation successfull";
   	}
   	else
   	{
   		//echo  validation_errors();  // error show
   		$this->load->view('users/articlelist.php');  //same page error show validation
   	}	




   }
	
}