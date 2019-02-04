<?php
class Admin extends MY_Controller
{  

   
   public function welcome()  
   {  
       

      $this->load->model('Loginmodel');
      $data['showdata']=$this->Loginmodel->articleList();  //sub object variable store
      //print_r($data);
      $this->load->view('admin/dashboard',$data); //key articles
   }
    

    //add user 

   public function adduser()
   {

     $this->load->view('admin/add_articles');

   }
    public function userValidation()
    {

       if($this->form_validation->run('add_article_rules'))
       {
           //echo "ok";
           $post=$this->input->post();
           // print_r($post);
           // exit;
           $this->load->model('Loginmodel');
           if($this->Loginmodel->add_articles($post))
           {
            $this->session->set_flashdata('msg','Articles added Successfully');
             $this->session->set_flashdata('msg_class','alert-success');
            //echo  "insert successfully";
           }
           else
           {
            $this->session->set_flashdata('msg','Articles not added Please try agian');
             $this->session->set_flashdata('msg_class','alert-danger');
             return redirect('admin/welcome');
           }



       }
       else
       {
        $this->load->view('admin/add_articles');
       }
     }

   //register form and sign up

  // public function register()
  //   {
      
  //     $this->load->view('admin/register');
  //     $this->input->
  //   }
    
  
 //session check login
  public function __construct()
  {
    parent::__construct();
    if( ! $this->session->userdata('id') )
    return redirect('login');
    
  }
  public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('login');
  }
 

 





	
}