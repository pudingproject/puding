<?php
/**
 *
 */
class Login extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->loadModel('login_model');
  }

  function index(){
    $data = array(
                     'title'		=> 'LOGIN | 9Coding',
                      'content'	=> 'login_member'
                  );
    $this->loadView($data);
  }
  //
  function member(){
      if($this->POST('login')){
			$data = array(
				'username'		=> $this->POST('username'),
				'password' 		=> md5($this->POST('password'))
			);
			$data_member = $this->login_model->cek_login_member($data);
			if($this->login_model->rows == 1){
				$this->setSession($data);
				$this->setSession('role', 'member');
				redirect('member');
			} else {
				$this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
				redirect('login');
				exit;
			}
    }
		$data = array(
			'title'		=> 'LOGIN | 9coding',
			'content'	=> 'login'
		);
		$this->loadView($data);
	}
  //
  function contributor(){
    if($this->POST('login')){
      $data = array(
        'username'		=> $this->POST('username'),
        'password' 		=> md5($this->POST('password'))
      );
      $data_member = $this->login_model->cek_login_kontributor($data);
      if($this->login_model->rows == 1){
        $this->setSession($data);
        $this->setSession('role', 'kontributor');
        redirect('member');
      } else {
        $this->flashmessage('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
        redirect('login');
        exit;
      }
    }
    $data = array(
      'title'		=> 'LOGIN | 9coding',
      'content'	=> 'login'
    );
    $this->loadView($data);
  }
}


 ?>
