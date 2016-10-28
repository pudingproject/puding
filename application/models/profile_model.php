<?php 

class Profile_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->prime_key 	= 'id_user';
		$this->table_name 	= 'profile';
	}
}

/* end of file profile_model.php */
/* location: ./application/models/profile_model.php */