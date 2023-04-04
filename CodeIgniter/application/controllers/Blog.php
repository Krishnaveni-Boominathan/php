<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class Blog extends CI_Controller{
    public function index(){
        echo "Hello world!!";
    }
    public function comments(){
        echo "Look at this";
    }
    public function shoes($sandals, $id){
        echo $sandals;
        echo "<br>";
        echo $id;
    }
    public function sample(){
        $this->load->view('sample');
        $this->load->view('sample_view');
    }
    public function blog(){
        $this->load->model("BlogModel");
        $title['articles'] = $this->BlogModel->demo();
        $this->load->view('blogview',$title);
    }

    public function cal($y=null, $m=null){
        $prefs = array(
            'start_day'    => 'saturday',
            'month_type'   => 'long',
            'day_type'     => 'short',
            'show_next_prev' => TRUE
        );
        $this->load->library('calendar', $prefs);
        //echo $this->calendar->generate();
       // echo $this->calendar->generate(2002, 6);
        $data = array(
            27  => '',
            7  => '',
            14 => ''
        );
    
        echo $this->calendar->generate($y, $m, $data);
        echo $this->calendar->generate();
    }
}
?>