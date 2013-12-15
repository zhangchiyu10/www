<?php

class Register extends CI_Controller {

    function insert() {
        $this->load->model("user_model");
        $info = array("name" => "u_235@qq.com", "password" => "th2010012028");
        $this->user_model->insert($info);
        echo "inserted";
    }

    function modify() {
        $this->load->model("user_model");
        $info = array("name" => "u_235@qq.com", "password" => "f");
        $this->user_model->update($info["name"], $info);
        echo "modified";
    }

    function kickout() {
        $this->load->model("user_model");
        $this->user_model->kickout("u_235@qq.com");
        echo "kicked";
    }

    function query() {
        $this->load->model("user_model");
        $result= $this->user_model->query("u_235@qq.com");
        echo $result[0]->position;
        
    }

}

?>
