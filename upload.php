<?php

require "db.php";

class Upload{
    public $upload;
    public $target_file;
    public function __construct () {
        $this->target_file = 'images/' . basename($_FILES["image"]["name"]);
        $this->upload = 1;
        $this->imageFileType = $_FILES["image"]["type"];
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "ფაილი აიტვირთა  - " . $check["mime"] . ".";
                $this->upload = 1;
            } else {
                echo "არ არის სურათი";
                $this->upload = 0;
            }
        }

    }
    public function Size(){
        if ($_FILES["image"]["size"] > 500000) {
            echo "ფაილის ზომა დაშვებულს აღემატება";
            $this->upload = 0;
        }
    }
    public function Format(){
        if( $_FILES["image"]["type"] !== 'image/jpeg') {
            echo "დაშვებულია მხოლოდ JPG, JPEG ფორმატები";
            $this->upload = 0;
        }
    }
    public function Upload(){
        if ($this->upload == 0) {
            echo "ფაილი არ აიტვირთა";
        }
        else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $this->target_file)) {
                $_SESSION['img']=$this->target_file;
                header("Location: private.php");
            }
            else {
                echo "ფაილი არ აიტვირთა";
            }
        }
    }
}
$img = new Upload();
$img->Size();
$img->Format();
$img->Upload();
?>