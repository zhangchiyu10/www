<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {
        $name = array("ip" => $_SERVER["REMOTE_ADDR"]);
        $this->load->view("login_view", $name);
    }

    function check_visitor() {
        $this->load->model("user_model");
        $result = $this->user_model->query($_POST["name"]);
        //var_dump($result) ;
        if ($result) {
            $name = $result[0]->name;

            if ($result[0]->password == $_POST["password"]) {
                $this->load->library("session");
                $this->session->set_userdata($name);

                $count = file_get_contents("./total.txt");
                $count = $count ? ++$count : 0;
                $data = array("n" => $name, "c" => $count);
                $f = fopen("./total.txt", "w");
                fwrite($f, $count);
                fclose($f);

                $this->load->view("upload_view.php", $data);
            } else {
                echo "你密码输错了。";
            }
        } else {
            echo "你不属于这里";
        }
    }

    function check_session($name) {
        $this->load->library("session");

        if ($this->session->userdata("name") == $name) {
            //echo "online";
            return true;
        } else {
            //echo "offline";
            return false;
        }
    }

    function logout() {
        $this->load->library("session");
        $this->session->unset_userdata("name");
        $this->index();
    }

}

?>
