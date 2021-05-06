<?php

class StudentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getStudent()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `student` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }
}
