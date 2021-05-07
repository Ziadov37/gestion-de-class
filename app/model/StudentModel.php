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


    public function addUStudent($add)
    {
        //preparation de la query
        // :placeholders
        $this->db->query("INSERT INTO `student`(`fullname`, `gender`, `class`, `parent`, `adress`, `birth`, `email`, `idprof`, `idparent`) VALUES (:name, :gender, :class,:parent,:adress, :birth, :email, :fullname, :idparent)");

        //saniteser contre sql injection
        $this->db->bind(':name', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':class', $add['class']);
        $this->db->bind(':parent', $add['parent']);
        $this->db->bind(':adress', $add['adress']);
        $this->db->bind(':birth', $add['birth']);
        $this->db->bind(':email', $add['email']);
        $this->db->bind(':fullname', $add['idprof']);
        $this->db->bind(':idparent', $add['idparent']);

        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteStudent($data)
    {
        $this->db->query('DELETE FROM student WHERE id = :id');
        $this->db->bind(':id', $data['id']);


        $row = $this->db->single();

        return $row;
    }

    public function getProf()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `prof` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }
}