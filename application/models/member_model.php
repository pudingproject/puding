<?php
  /**
   *
   */
  class Member_model extends MY_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->prime_key="id_user";
      $this->table_name="user";
    }
  }

 ?>
