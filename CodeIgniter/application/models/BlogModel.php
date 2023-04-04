<?php
class BlogModel extends CI_Model{
    public function demo(){
        $data = array(
            array("title"=>"Title goes here"),
            array("title"=>"Title1 goes here"),
            array("title"=>"Title2 goes here"),
        );
        return $data;
    }
}
?>