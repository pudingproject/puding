<?php
  /**
   *
   */
  class Register extends MY_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->loadModel('member_model');
      $this->loadModel('kontributor_model');
    }
    //registrasi member
    function member(){
      if($this->POST('daftar')){
        $username =$this->POST('username');
        $password =$this->POST('password');

        if (isset($username,$password)){
          if($this->POST('password')==$this->POST('password2')){
            //username di database
            $cek_username=$this->member_model->get_data_byUsername($username);
            if(isset($cek_username->username)){
              $data_username = $cek_username->username;
            } else {
              $data_username = "";
            }
            if($data_username != $username){
              $data = array(
                'username'	=> $username,
                'password'	=> md5($password),
                'role'      => 'member'
              );
              $this->Pemilik_model->insert($data);
              $this->flashmessage('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
            }
            else {
              $this->flashmessage('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
            }
            redirect('login');
          } else {
				  $this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
					redirect('Register');
				  }

        }	else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
				redirect('Register');
			  }
      } else {
			redirect('Register');
		  }
    }
    //registrasi kontributor
    function kontributor(){
      if($this->POST('daftar')){
        $username =$this->POST('username');
        $password =$this->POST('password');

        if (isset($username,$password)){
          if($this->POST('password')==$this->POST('password2')){
            //username di database
            $cek_username=$this->kontributor_model->get_data_byUsername($username);
            if(isset($cek_username->username)){
              $data_username = $cek_username->username;
            } else {
              $data_username = "";
            }
            if($data_username != $username){
              $data = array(
                'username'	=> $username,
                'password'	=> md5($password),
                'role'      => 'kontributor'
              );
              $this->Pemilik_model->insert($data);
              $this->flashmessage('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
            }
            else {
              $this->flashmessage('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
            }
            redirect('login');
          } else {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
          redirect('Register');
          }

        }	else {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
        redirect('Register');
        }
      } else {
      redirect('Register');
      }
    }
    //registrasi kontributor
  }

 ?>
