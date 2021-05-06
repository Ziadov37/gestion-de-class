<?php

class StudentController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('StudentModel');
    }

    // public function index()
    // {
    //     //load the view 
    //     $data = $this->userModel->getStudent();
    //     $this->view('pages/Login', $data);
    // }

    public function showStudent()
    {
        //load the view 
        $data = $this->userModel->getStudent();
        $this->view('pages/student', $data);
    }
}
