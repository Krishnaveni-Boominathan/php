<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class Subject extends CI_Controller{
    public function index(){
        $data['subject'] = ['CODEIGNITER','MYSQL','HTML','CSS','BOOTSTRAP','JAVASCRIPT','JQUERY'];
        $this->load->view("subject_view.php",$data);
    }
}
?>