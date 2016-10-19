<?php
  /**
   *
   */
  class Login_model extends MY_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->table_name="user";
      $this->prime_key="id_user";
    }
    //cek login member
    function cek_login_member($data){
      $data_member=$this->get_data_byConditional($data);
      if($data_member->num_rows()==1){
        $this->rows=$data_member->num_rows();
      }
      return $data_member->result();
    }
    //cek login kontributor
    function cek_login_kontributor($data){
      $data_kontrib=$this->get_data_byConditional($data);
      if($data_kontrib->num_rows()==1){
        $this->rows=$data_kontrib->num_rows();
      }
      return $data_kontrib->result();
    }
  }
