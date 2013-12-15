<?php

class Register extends CI_Controller {

    function check_visitor() {
        $this->load->model("user_model");
        $result = $this->user_model->query($_POST["name"]);
        if ($result) {
            echo"该用户名已存在";
        } else {
            if ($_POST["password"] != $_POST["password1"]) {
                echo"两遍密码输入不一致";
            } else {

                $info = array("name" => $_POST["name"], "password" => $_POST["password"]);
                $this->user_model->insert($info);
                echo "注册成功";
            }
        }
    }

}
?>
