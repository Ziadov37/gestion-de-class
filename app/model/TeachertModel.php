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
        $this->db->query("INSERT INTO `prof`(`fullname`, `gender`, `matiere`, `phone`, `idclass`) VALUES (:fullname, :gender, :matiere, :phone, :name)");

        //saniteser contre sql injection
        $this->db->bind(':fullname', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':matiere', $add['matiere']);
        $this->db->bind(':phone', $add['phone']);
        $this->db->bind(':name', $add['idclass']);


        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletTeacher($data)
    {
        $this->db->query('DELETE FROM prof WHERE id = :id');
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

    public function getClass()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `class` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }
}