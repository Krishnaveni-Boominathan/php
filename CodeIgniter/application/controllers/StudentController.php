<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentController extends CI_Controller{
    public function index(){
        $this->load->model('StudentModel', 'stud');
        //$student = $this->StudentModel->student_data();
       // $student = new StudentModel;
        //$student = $student->student_data();
        $student = $this->stud->student_data();
        $student_class = $this->stud->student_class();
        echo "Student Name: ".$student . " and Class is: ". $student_class;
    }
    public function show($id){
       // echo $id;
        $this->load->model('StudentModel', 'stud');
        $select_stud = $this->stud->student_show($id);
        echo $select_stud;
    }
}
?>