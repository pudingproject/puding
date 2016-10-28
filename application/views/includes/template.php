<?php
	$this->load->view('includes/header', array('title' => $title, 'css' => $css));
	//$this->load->view('includes/navbar');
	$this->load->view($content);
	$this->load->view('includes/footer');
?>
