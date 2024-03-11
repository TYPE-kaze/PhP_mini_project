<?php 
declare(strict_types= 1);

namespace App\Controllers;

class PatientController {
    public function index() {
        (new \App\Controllers\UserController)->redirectIfNotLoggedIn();
        $patientService = new  \App\PatientService();
        $patients = $patientService->getAllPatients();
        return (new \App\View())->render('patient/index', ['patients' => $patients]);
    }

    public function getAddForm() {
        (new \App\Controllers\UserController)->redirectIfNotLoggedIn();
        return (new \App\View())->render('patient/add');
    }

    public function add() {
        $patientService = new \App\PatientService();

        $controller = isset($_GET['controller'])?$_GET['controller']:'home';
        $action = isset($_GET['action'])?$_GET['action']:'index';

        if($controller == 'patient' & $action == 'add') {
            $fullname = $_POST['fullname'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];

            $added = $patientService->addPatient($fullname, $dateOfBirth, $address, $mobile);
            if ($added) {
                // header('Location: index.php?controller=home');
                (new \App\Router())->redirect("/patient/index");
                exit;
            } else {
                echo "Error adding patient!";
            }
        } else {
            (new \App\Router())->redirect("/");
        }
    }

    public function getEditForm() {
        (new \App\Controllers\UserController)->redirectIfNotLoggedIn();
        $id = $_GET['id'];
        $patientService = new \App\PatientService();
        $patient = $patientService->getOnePatient($id);
        return (new \App\View())->render('patient/edit',['fullname'=>$patient->getFullname(), 'dateOfBirth'=>$patient->getDateOfBirth(), 'address'=>$patient->getAddress(), 'mobile'=>$patient->getMobile(), 'patient' => $patient]);
    }

    public function edit() {
        $patientService = new \App\PatientService();
        $id = $_GET['id'];
        $fullname = $_POST['fullname'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];

        $updated = $patientService->editPatient($id, $fullname, $dateOfBirth, $address, $mobile);
        if ($updated) {
            // header('Location: index.php?controller=home');
            (new \App\Router())->redirect("/patient/index");
            exit;
        } else {
            echo "Error adding patient!";
        }
    }
    

    public function delete() {
        $id = $_GET['id'];
        $patientService = new \App\PatientService();
        $deleted = $patientService->deletePatient($id);
        if ($deleted) {
            (new \App\Router())->redirect("/patient/index");
            exit;
        } else {
            echo "Error deleting patient!";
        }
    }
}