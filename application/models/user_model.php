<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert($info) {
        $this->db->insert("user", $info);
    }

    function update($name, $info) {
        $this->db->where("name", $name); //主键
        $this->db->update("user", $info);
    }

    function kickout($name) {
        $this->db->where("name", $name); //主键
        $this->db->delete("user");
    }

    function query($name) {
        $this->db->where("name", $name); //主键
        $this->db->select("*"); //position
        $R = $this->db->get("user");
        return $R->result();
    }

}
?>