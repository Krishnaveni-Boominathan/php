<?php
 class StudentModel extends CI_Model{
    public function student_data(){
        return $stud_name = "krish";
    }
    public function student_class(){
        return $stud_class = "Bsc IT";
    }
    public function student_show($id){
       if($id == '1'){
            return $result = "User1";
       }elseif($id == '2'){
            return $result = "User2";
       }
    }

    public function demo(){
        return $title = "Hello I am Krish";
    }
 }

?>