<?php  

class Home extends MY_Controller
{

	public function index()
	{
		$this->data = array(
			'title'		=> 'Home',
			'content'	=> 'index',
			'css'		=> 'index'
		);

		$this->loadView($this->data);
	}

	/**
	 * @author Azhary Arliansyah
	 * -- ROUTING CONFIGURATION --
	 *
	 * demi interface yang user-friendly dan clean url dengan konfigurasi routing.
	 * menambahkan variabel $route['url'] = 'nama_controller/nama_method'; pada file routes.php
	 * agar method ini dapat diakses dengan url
	 * url sebelum konfigurasi -> project/nama_controller/nama_method
	 * url setelah konfigurasi -> project/url
	 * 
	 * url sebelum konfigurasi -> localhost/puding/home/announcement
	 * url setelah konfigurasi -> localhost/puding/announcement
	 * konfigurasi file ./application/config/routes.php
	 **/
	public function announcement()
	{
		$this->data = array(
			'title'		=> 'Announcement',
			'content'	=> 'announcement',
			'css'		=> 'announcement'
		);

		$this->loadView($this->data);
	}

	public function ebook()
	{
		$this->data = array(
			'title'		=> 'Ebook',
			'content'	=> 'ebook',
			'css'		=> 'ebook'
		);
		
		$this->loadView($this->data);
	}

	public function term($role)
	{
		if ($role == 'kontributor')
		{
			$this->data = array(
				'title'		=> 'Term Kontributor',
				'content'	=> 'term-kontributor',
				'css'		=> 'term-kontributor'
			);
		}
		else
		{
			$this->data = array(
				'title'		=> 'Term Developer',
				'content'	=> 'term-developer',
				'css'		=> 'term-developer'
			);
		}

		$this->loadView($this->data);
	}
}

/* end of file Home.php */
/* location: ./application/controllers/Home.php */