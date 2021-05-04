<?php

class PageControler extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('PageModel');
    }
    public function getData()
    {
        $data = $this->userModel->getUsers();
        $this->view('pages/Login', $data);
    }
}
