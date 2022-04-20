<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('employee_model');
        // Load url helper
        $this->load->helper('url');
        $this->lang->load('menu', 'vietnam');
    }

    public function index() {
        //$data = $this->getEmployeeList();
        $data['title'] = 'Dự Án';
        $data['content'] = 'employee/employee';
        $data['user'] = ['user_id' => 'user01', 'gruoup_id' => '99'];
        $data['team_list'] = ['team_id' => '10', 'department' => '5', 'group_id' => '1'];
        $data['employee'] = ['employee_id' => '1', 'employee_name' => 'TA 01', 'birthday' => '1995-04-04', 'gender' => '0', 'department' => '0', 'employee_image' => 'aaaaaaaa', 'phone' => '11111111111', 'email' => 'aaaaaa@gmail.com'];
        $this->load->view('layouts/main_layout', $data);
    }

    public function getEmployeeList() {
        $employee_list = $this->employee_model->getEmployeeList();
        $data['employee'] = $employee_list;
        return $data;
    }
}
?>