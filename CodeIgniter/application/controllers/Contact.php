<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class Contact extends CI_Controller{
    public function index(){
        $this->load->helper('form');
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("email","Email","required|valid_email", array('required' => 'Email Required', 'valid_email' => 'Valid Email Required'));
        if($this->form_validation->run() === TRUE){
            echo "All okay";
        }else{
            $this->load->view('contactview');
        }
    }
}
?>