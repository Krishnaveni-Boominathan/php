<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //cannot access any class directly by main path 
class EmailController extends CI_Controller{
    public function index(){
        $this->load->library('email');
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_timeout' => 30,
            'smtp_port' => 465,
            'smtp_user' => 'krishnavenib2706@gmail.com',
            'smtp_pass' => 'coimbatore',
            'charset' => 'utf-8',
            'mailtype' => 'html',
            'newline' => '\r\n',
        );
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $this->email->from('krishnavenib2706@gmail.com');
        $this->email->to('bhavi@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        if($this->email->send()){
            echo "Mail send successfully";
        }else{
            echo "unable to send";
            echo "<br><br>";
            print_r($this->email->print_debugger());
        }
    }
}
?>