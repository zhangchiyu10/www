<?php

class UploadFiles extends CI_Controller {

    function index() {
        $this->load->view("upload_view.php");
    }

    function upload() {
        /*
          if (!empty($_POST['sub'])) {
          //var_dump($_FILES["fs"]);
          $finfo = $_FILES["fs"];
          switch ($finfo["type"]) {
          case "image/jpeg":
          if ($finfo["size"] >= 1024 * 1024 * 5) {
          echo "这张照片也太大了";
          } else {
          $newname = $finfo["name"];
          move_uploaded_file($finfo["tmp_name"], "./upload/$newname");
          echo "\n好了";
          }
          break;
          default :echo "这不是个照片，你应该重传";
          }
          } else {
          echo "你没选文件";
          }
         */
        $config["upload_path"] = "./upload";
        $config["allowed_types"] = "*";
        $config["max_size"] = 10 * 1024;
        $this->load->library("upload", $config);
        if ($this->upload->do_upload("fs")) {
            // $data=$this->upload->data();
            echo"好了";
        } else {
            echo $this->upload->display_errors();
        }
    }

}

?>
