<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller{
    public function index(){
        echo "I am a index page";
    }
    public function aboutus(){
        echo "I am a about page";
    }
    public function blog($blog_url =''){
        echo "$blog_url";
        $this->load->view('blogview');

    }

    public function demo(){
        //$data['title'] = "Hello I am Krish";
        $this->load->model("StudentModel");
        $title = $this->StudentModel->demo();
        $data['title']=$title;
        $this->load->view("demopage",$data);
    }
   
}
?>