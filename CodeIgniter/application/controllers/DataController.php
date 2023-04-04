<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class DataController extends CI_Controller{
     public function index(){
        $this->load->database();
        $this->db->query("blog_test");
     }
}
?>