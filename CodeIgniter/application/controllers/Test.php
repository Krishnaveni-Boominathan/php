<?php
class Test extends CI_Controller{
    public function index(){
        $this->load->view('test');
        $this->load->model('User_model');
    }
    public function hello(){
        echo "This is hello function.";
    }
}
?>