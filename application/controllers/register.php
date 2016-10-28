<?php
  /**
   *
   */
  class Register extends MY_Controller
  {

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('member_model');
        $this->loadModel('kontributor_model');
        $this->loadModel('profile_model');
    }

    public function index()
    {
        $this->data = array(
            'title'     => 'Daftar Sebagai Developer',
            'content'   => 'register/daftar-developer',
            'css'       => 'daftar-developer'
        );    

        $this->loadView($this->data);
    }

    public function partner()
    {
        $this->data = array(
            'title'     => 'Daftar Sebagai Kontributor',
            'content'   => 'register/daftar-kontributor',
            'css'       => 'daftar-kontributor'
        );

        $this->loadView($this->data);
    }

    //registrasi member
    public function member()
    {
        if($this->POST('daftar'))
        {
            $username = $this->POST('username');
            $password = $this->POST('password');
            $email    = $this->POST('email');

            if (isset($username,$password))
            {
                if($this->POST('password') == $this->POST('password2'))
                {
                    //username di database
                    $cek_username=$this->member_model->get_data_byUsername($username);
                    if(isset($cek_username->username))
                    {
                        $data_username = $cek_username->username;
                    } 
                    else 
                    {
                        $data_username = "";
                    }

                    if($data_username != $username)
                    {
                        $data = array(
                            'username'      => $username,
                            'password'      => md5($password),
                            'ip_address'    => $this->input->ip_address(),
                            'last_login'    => date('Y-m-d H:i:s'),
                            'role'          => 'member'
                        );
                        // insert data ke table member
                        $this->member_model->insert($data);

                        $data = array(
                            'id_user'       => $this->db->insert_id(),
                            'email'         => $email
                        );
                        // insert data ke table profile
                        $this->profile_model->insert($data);

                        $this->flashmessage('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
                    }
                    else 
                    {
                        $this->flashmessage('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
                    }

                    redirect('login');
                    exit;
                } 
                else 
                {
                    $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
                    redirect('register');
                    exit;
                }
            }	
            else 
            {
                $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
                redirect('register');
                exit;
            }
        } 
        else 
        {
            redirect('register');
            exit;
        }
    }

    //registrasi kontributor
    public function kontributor()
    {
        if($this->POST('daftar'))
        {
            $username = $this->POST('username');
            $password = $this->POST('password');
            $email    = $this->POST('email');

            if (isset($username,$password))
            {
                if($this->POST('password') == $this->POST('password2'))
                {
                    //username di database
                    $cek_username = $this->kontributor_model->get_data_byUsername($username);
                    if(isset($cek_username->username))
                    {
                        $data_username = $cek_username->username;
                    } 
                    else 
                    {
                        $data_username = "";
                    }

                    if($data_username != $username)
                    {
                        date_default_timezone_set("Asia/Jakarta");
                        $data = array(
                            'username'      => $username,
                            'password'	    => md5($password),
                            'role'          => 'kontributor',
                            'ip_address'    => $this->input->ip_address(),
                            'last_login'    => date('Y-m-d H:i:s')
                        );

                        $this->kontributor_model->insert($data);

                        $data = array(
                            'id_user'   => $this->db->insert_id(),
                            'email'     => $email
                        );

                        $this->profile_model->insert($data);

                        $this->flashmessage('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
                    }
                    else 
                    {
                        $this->flashmessage('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
                    }
                        
                    redirect('login/partner');
                    exit;
                } 
                else 
                {
                    $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
                    redirect('register/partner');
                    exit;
                }
            }	
            else 
            {
                $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
                redirect('register/partner');
                exit;
            }
        } 
        else 
        {
            redirect('register/partner');
            exit;
        }
    }
}

/* end of file register.php */
/* location: ./application/controllers/register.php */
