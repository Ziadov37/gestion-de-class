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
        $datat = $this->userModel->getProf();
        $this->view('pages/student', $data, $datat);
    }

    public function insertStudent()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/student');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'fullname' => $_POST['name'],
                'gender' => $_POST['gender'],
                'class' => $_POST['class'],
                'parent' => $_POST['parent'],
                'adress' => $_POST['adress'],
                'birth' => $_POST['birth'],
                'email' => $_POST['email'],
                'idprof' => $_POST['ifprof'],
                'idparent' => "1"

            ];
            //consomation du data
            $this->userModel->addUStudent($data);
            header('location: ' . URLROOT . '/' . 'StudentController/showStudent');
        }
    }

    public function deleteStudent()
    {

        $data = [
            'id' => $_GET['id']
        ];

        $this->userModel->deleteStudent($data);

        header('location:' . URLROOT . '/' . 'StudentController/student');
    }

    public function option()
    {
        //load the view 
        $data = $this->userModel->getProf();
        $this->view('pages/student', $data);
    }
}