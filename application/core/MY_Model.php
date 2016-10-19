<?php
  /**
   *
   */
  class MY_Model extends CI_Model
  {
    protected $prime_key;
    protected $table_name;
    public $rows=0;
    function __construct()
    {
      parent::__construct();
    }
    //get all data
    function get_all()
    {
      $query = $this->db->get($this->table_name);
      $this->rows = $query->num_rows();
      return $query->result();
    }
    //get data by primary key
    function get_by_Key($key)
    {
      $this->db->where($this->primary_key, $key);
		  $query = $this->db->get($this->table_name);
		  $this->rows = $query->num_rows();
		  return $query->row();
    }
    //get by condition
    function get_data_byConditional($condition){
        $this->db->where($condition);
        $query = $this->db->get($this->table_name);
        return $query;
    }
    function get_data_byUsername($username){
      $this->db->where('username', $username);
      $query = $this->db->get($this->table_name);
      return $query->row();
    }
    //insert data
    function insert($data) {
      return $this->db->insert($this->table_name, $data);
    }
    //delete data
    function delete($key) {
		    return $this->db->delete($this->table_name, array($this->primary_key => $key));
	  }
    //update data
    function update($key, $data) {
      $this->db->where($this->primary_key, $key);
      return $this->db->update($this->table_name, $data);
    }

  }
