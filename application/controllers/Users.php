<?php

class Users extends MY_controller
{
   
   public function index()
   { 

   	  //helper load
   	 // $this->load->helper("url");
   	 //link tag (helper) load
   	 //$this->load->helper("html");

         //echo "hello admin";

   	  $this->load->view('users/articlelist');
   }

}