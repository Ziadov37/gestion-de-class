<?php

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('TeachertModel');
    }

    // public function index()
    // {
    //     //load the view 
    //     $data = $this->userModel->getStudent();
    //     $this->view('pages/Login', $data);
    // }

    public function showTeacher()
    {
        //load the view 
        $data = $this->userModel->getTeacher();
        $this->view('pages/teacher', $data);
    }

    public function insertTeacher()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/teacher');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'fullname' => $_POST['fullname'],
                'gender' => $_POST['gender'],
                'matiere' => $_POST['matiere'],
                'phone' => $_POST['phone']

            ];
            //consomation du data
            $this->userModel->addTeacher($data);
            header('location: ' . URLROOT . '/' . 'TeacherController/showTeacher');
        }
    }
}
