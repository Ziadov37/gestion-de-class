<?php

class ClassModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getClass()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `class` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }


    public function addClass($add)
    {
        //preparation de la query
        // :placeholders
        $this->db->query("INSERT INTO `class`(`name`, `gender`, `matiere`) VALUES (:name, :idprof, :ifstudent)");

        //saniteser contre sql injection
        $this->db->bind(':name', $add['name']);
        $this->db->bind(':idprof', $add['idprof']);
        $this->db->bind(':ifstudent', $add['idstudent']);


        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletClass($data)
    {
        $this->db->query('DELETE FROM class WHERE id = :id');
        $this->db->bind(':id', $data['id']);


        $row = $this->db->single();

        return $row;
    }

    // public function editTeacher($data)
    // {
    //     $this->db->query("UPDATE prof SET fullname= :fullname, gender= :gender , matiere= :matiere , phone= :phone WHERE id= :id");
    //     $this->db->bind(':fullname', $data['fullname']);
    //     $this->db->bind(':gender', $data['gender']);
    //     $this->db->bind(':matiere', $data['matiere']);
    //     $this->db->bind(':phone', $data['phone']);
    //     $this->db->bind(':id', $data['id']);
    //     $data = $this->db->single();
    //     return $data;
    // }
}