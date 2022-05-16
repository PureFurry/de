<?php

use LDAP\Result;

class BlogKategoriModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "blogkategori";
    public $adminWork = "admin";

    public function get_all(){

        return $this->db->get($this->tableName)->result();

    }

    public function insert($data = array()){

        return $this->db->insert($this->tableName, $data);


    }

    public function delete($id){

        return $this->db->where("id", $id)->delete($this->tableName);

    }

    public function update($id,$data = array()){
        $this->db->set($data);
        return $this->db->where("id",$id)->update($this->tableName, $data);
    }

    public function print_process($data_process = array()){
        return $this->db->insert($this->adminWork, $data_process);
    }

    public function get_log(){


        return $this->db->get($this->adminWork)->result();

    }
}