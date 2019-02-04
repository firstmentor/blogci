<?php 

class Login extends MY_Controller
{
	public function index()
	{
		
   	//Load from Library 
   	$this->load->library('form_validation');
   	$this->form_validation->set_rules('uname','User Name','required|alpha');  //rule define  validation
   	$this->form_validation->set_rules('pass','Password','required|max_length[10]');  //rule define validation

   	// read text validation

   	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    




   	if($this->form_validation->run()) //run validation
   	{
   		//echo "Validation successfull";

         $uname = $this->input->post('uname');  //input  user class 
         $pass = $this->input->post('pass');
         //echo "username is ".$uname."</br>" ."password is ". $pass;
         $this->load->model('Loginmodel');
         //id pass model
         $login_id =$this->Loginmodel->isvalidate($uname,$pass);

         // echo $login_id;
         // exit;

         if($login_id)
         {
            //login correct
            //echo "details matched";
            $this->load->library('session');
             $this->session->set_userdata('id', $login_id);
             //$this->load->view('admin/dashboard');
             return redirect('admin/welcome');
             
         }
         else
         {
            //login failed
              //echo "no matched";
          //set_flashdata
          $this->session->set_flashdata('Login_failed','Invalid Username/Password');
          return redirect('login');
         } 

   	}
   	else
   	{
   		//echo  validation_errors();  // error show
   		$this->load->view('admin/login.php');  //same page error show validation
   	}	

   }
	}
}