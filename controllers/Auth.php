<?php
  
  class Auth extends CI_Controller 
  {
     
     public function register()
     {
       $this->load->helper('form');
      $this->load->view('Register'); 
     }


     public function myfile()
     {
        $this->load->library('form_validation');
    
        $this->form_validation->set_message('is_unique','this email already registered');
        $this->form_validation->set_rules('name' ,'Firstname','required');
        $this->form_validation->set_rules('email' ,'Email','required|valid_email');
       $this->form_validation->set_rules('phone' ,'Phone','required');
        $this->form_validation->set_rules('password' ,'Password','required');

       if($this->form_validation->run()==false)
        {
          $this->register();
        }

       else{
          
         $this->load->model('Auth_model');
         $formArray = array();
         $formArray['name']  = $this->input->post('name');
         $formArray['email']  = $this->input->post('email');
         $formArray['phone']  = $this->input->post('phone');
       $formArray['password'] = MD5($this->input->post('password'));
         
            
         $formArray['created_at']  = date('y-m-d H:i:s');

         $this->Auth_model->create($formArray);

         $this->session->set_flashdata('msg' ,'account created succcessfully');
         redirect(base_url().'index.php/Auth/login');
         
         
      }
     }

     public function login()
     {
      $this->load->view('login');

      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $this->db->where('email',$email);
      $this->db->where('password', $password);

      $query = $this->db->get('users');
      $find = $query->num_rows($query);

      if($find>0)
      {
        $this->session->set_flashdata('suc','you are logged');
        redirect('Auth/execute');
      }
      else
      {
        $this->session->set_flashdata('suc','wrong password and email');
        //echo "wrong data";
      }
     }

     public function execute()
     {
          echo "finally working";
     }

  }//class



?>