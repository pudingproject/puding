<?php
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	protected function loadView($data) {
		return $this->load->view('includes/template', $data);
	}

	protected function loadModel($model) {
		return $this->load->model($model);
	}

	protected function flashmessage($key, $msg) {
		return $this->session->set_flashdata($key, $msg);
	}

	protected function getFlash($key) {
		return $this->session->flashdata($key);
	}

	protected function setSession($array) {
		return $this->session->set_userdata($array);
	}

	protected function getSession($key) {
		return $this->session->userdata($key);
	}

	protected function POST($name) {
		return $this->input->post($name);
	}

	protected function printArray($array) {
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

	protected function dumpArray($array) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
	}
}
?>
