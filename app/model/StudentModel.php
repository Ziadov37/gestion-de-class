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
        $this->db->query("INSERT INTO `student`(`fullname`, `gender`, `class`, `parent`, `adress`, `birth`, `email`, `idprof`, `idparent`) VALUES (:fullname, :gender, :class,:parent,:adress, :birth, :email, :idprof, :idparent)");

        //saniteser contre sql injection
        $this->db->bind(':fullname', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':class', $add['class']);
        $this->db->bind(':parent', $add['parent']);
        $this->db->bind(':adress', $add['adress']);
        $this->db->bind(':birth', $add['birth']);
        $this->db->bind(':email', $add['email']);
        $this->db->bind(':idprof', $add['idprof']);
        $this->db->bind(':idparent', $add['idparent']);

        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
