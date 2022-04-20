<?php
class employee_model extends CI_Model {
    public function getEmployeeList() {
        $query = $this->db->query('select * from tbl_employee');
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
}
?>