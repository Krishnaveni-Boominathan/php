<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FormController extends CI_Controller{
    public function index(){
        $this->load->view('myformview');
        if(isset($_POST['submit'])){
            $name = $_POST['uname'];
            $email = $_POST['email'];
            $this->load->model('FormModel');
            $this->FormModel->save($name, $email);
        }
    }
}
?>