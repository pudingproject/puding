<?php
/**
 *
 */
class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('login_model');
    }

    public function index(){
        $data = array(
            'title'		=> 'Login sebagai developer | Puding',
            'content'	=> 'login/login-developer',
            'css'       => 'login-developer'
        );
        $this->loadView($data);
    }

    public function partner()
    {
        $data = array(
            'title'     => 'Login sebagai kontributor | Puding',
            'content'   => 'login/login-kontributor',
            'css'       => 'login-kontributor'
        );
        $this->loadView($data);
    }
  
    public function member()
    {
        if($this->POST('login'))
        {
            $data = array(
                'username'		=> $this->POST('username'),
                'password' 		=> md5($this->POST('password'))
            );

            $data_member = $this->login_model->cek_login_member($data);
            if($this->login_model->rows == 1)
            {
                $this->setSession($data);
                $this->setSession('role', 'member');
                redirect('member');
                exit;
            } 
            else 
            {
                $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
                redirect('login');
                exit;
            }
        }

        $this->index();
    }

    public function kontributor()
    {
        if($this->POST('login'))
        {
            $data = array(
                'username'		=> $this->POST('username'),
                'password' 		=> md5($this->POST('password'))
            );

            $data_member = $this->login_model->cek_login_kontributor($data);
            if($this->login_model->rows == 1)
            {
                $this->setSession($data);
                $this->setSession('role', 'kontributor');
                redirect('member');
                exit;
            } 
            else 
            {
                $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
                redirect('login/partner');
                exit;
            }
        }

        $this->partner();
    }
}

/* end of file login.php */
/* location: ./application/controllers/login.php */
