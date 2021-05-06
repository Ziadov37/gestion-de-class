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

    public function deleteTeacher()
    {

        $data = [
            'id' => $_GET['id']
        ];

        $this->userModel->deletTeacher($data);

        header('location:' . URLROOT . '/' . 'TeacherController/teacher');
    }

    // public function updateTeacher($id)
    // {
    //     $this->db->query("SELECT * FROM prof WHERE id = :id");
    //     $this->db->bind(':id', $id);

    //     $results = $this->db->single();

    //     return $results;
    // }


    public function updateTeacher($id)
    {

        if (isset($_POST["submit"])) {


            $data = [
                'id' => $id,
                'fullname' => $_POST['fullname'],
                'gender' => $_POST['gender'],
                'matiere' => $_POST['matiere'],
                'phone' => $_POST['phone']
            ];
            $this->userModel->editTeacher($data);
            header('location:' . URLROOT . '/' . '/TeacherController/teacher');
            // header('location:' . URLROOT);
        } else {
            // $contact = $this->userModel->getContactbyId($id);



            // $this->view('pages/teacher', $contact);
            echo "by";
        }
    }
}