<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        error_reporting(0);
    }

    public function index($msg = "") {
        
        $name = $this->session->userdata("name");
        $username = $this->session->userdata("username");

        
        $data['message'] = $msg;
        $data['name'] = $name;
        $data['username'] = $name;
        
        
        $this->load->view('home', $data);
    }

    public function submit_registration() {       
        
        $data = array(
            'name' => $_POST["name"],
            'username' => $_POST["username"],
            'password' => $_POST['password']
        );
        
        $this->user_model->insert_user($data);
        
        redirect('user/index/');
        
    }
    
    
    public function login($msg = ""){
        
        $data['message'] = $msg;
        $this->load->view('login', $data);
    }
    
    public function login_submit(){
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $result = $this->user_model->check_user($username, $password);                      
        
        if(count($result) > 0)
        {
            $userdata = array(
                'name' => $result[0]->name,
                'username' => $result[0]->username,
                'logs' => TRUE
            );
            
            $this->session->set_userdata($userdata);       
            redirect('user/index/login_success');
        }
        else {
            redirect('user/login/not_login');
        }
        
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */