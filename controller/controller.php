<?php
    include_once("model/Model.php");
    class Controller {
    public $model;
    public function __construct()
        {
            $this->model = new Model();
        }
    public function invoke(){
        $result = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
    if($result == 'login'){
        include 'view/home.php';
    }else{
        include 'view/login.php';
    }
}
}
?>