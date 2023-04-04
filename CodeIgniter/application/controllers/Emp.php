<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class Emp extends CI_Controller{
    public function index(){
        $data['employee'] = array(
            array("id"=>1, "name"=>"Krish", "email"=>"krish@gmail.com"),
            array("id"=>2, "name"=>"Bhavi", "email"=>"bhavi@gmail.com"),
            array("id"=>3, "name"=>"Preethi", "email"=>"preethi@gmail.com"),
        );
        $data['page_heading']="Employee details";
        $this->load->view('emp_view',$data);
    }
}
?>