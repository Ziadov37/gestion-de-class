<?php

class TeachertModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getTeacher()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `prof` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }


    public function addTeacher($add)
    {
        //preparation de la query
        // :placeholders
        $this->db->query("INSERT INTO `prof`(`fullname`, `gender`, `matiere`, `phone`) VALUES (:fullname, :gender, :matiere,:phone)");

        //saniteser contre sql injection
        $this->db->bind(':fullname', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':matiere', $add['matiere']);
        $this->db->bind(':phone', $add['phone']);


        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
