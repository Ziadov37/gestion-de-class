<?php

class PageModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM `admin`");
        $result = $this->db->resultSet();

        return $result;
    }
}
