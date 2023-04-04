<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeController extends CI_Controller{
    public function index(){
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->getEmployee();
        $this->load->view('frontend/employee', $data);
        // $employee = $this->EmployeeModel->getEmployee();
        // $this->load->view('frontend/employee', ['employee'=>$employee]);
    }
    
    public function create(){
        $this->load->view('frontend/create');
    }
    public function store(){
        
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','email','trim|required');
        if($this->form_validation->run()){
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone'),
                'email_id' => $this->input->post('email')
            ];
            $this->load->model('EmployeeModel','emp');
            $this->emp->insertEmployee($data);
            redirect(base_url('employee'));
        }else{
            $this->create();
            //redirect(base_url('employee/add'));
        }
    }
    public function edit($id){
       $this->load->model('EmployeeModel');
       $data['employee'] = $this->EmployeeModel->editEmployee($id);
       $this->load->view('frontend/edit', $data);
    }
   
    public function update($id){
            $data1 = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone'),
                'email_id' => $this->input->post('email')
            ];
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->updateEmployee($data1, $id);
            redirect(base_url('employee'));
       
    }
    public function delete($id){
        $this->load->model('EmployeeModel');
        $this->EmployeeModel->deleteEmployee($id);
        redirect(base_url('employee'));
    }
}
?>