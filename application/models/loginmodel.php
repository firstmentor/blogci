<?php
class Loginmodel extends CI_model
{
   
   public function isvalidate($username, $password) //receive username or passeord 
   {
     //trur
     //database autoload $autoload['libraries'] = array('database');
   	//core php 
   	 // $this->db->query("select * from users where username= $username and  password= $password" );
   	 // if(count($q->row()))
   	 // {
   	 // 	return true
   	 // }	
   	 // else
   	 // {

   	 // }

   	$q=$this->db->where(['username' =>$username,'password' =>$password])->get('users');

   	// echo "<pre>";
   	// print_r($q);
   	if($q->num_rows())   //0,-1  return false 1,2,3 return true -1 return false 
   	{
   		return  $q->row()->id;
   	}
   	else
   	{
   		return false;
    }

}


 public function articleList()
 {
  $this->load->library('session');
  $id=$this->session->userdata('id');
  $q=$this->db->select('article_title')
           ->from('article')
           ->where(['user_id' =>$id])
           ->get();
           // print_r($q);
           // exit;
           //print_r($q->result());
           return $q->result();

 }
  public function add_articles($array)
  {  
       return $this->db->insert('article',$array);
  }




}