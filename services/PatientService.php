<?php 
namespace App;
require_once MODELS_DIR."Patient.php";
class PatientService {
    public function getAllPatients() {
        $dbConnection = new \DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null) {
            $sql = "select * from patients order by id desc";
            $stmt = $conn->query($sql);

            $patients = [];
            while($row = $stmt->fetch()) {
                $patient = new Patient($row['id'], $row['fullname'], $row['dateOfBirth'], $row['address'], $row['mobile']);
                $patients[] = $patient;
            }
            return $patients;
        }
    }

    public function getOnePatient($id) {
        $dbConnection = new \DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null) {
            $sql = "select * from patients where id = $id";
            $stmt = $conn->query($sql);
            $row = $stmt->fetch();
            $patient = new Patient($row['id'], $row['fullname'], $row['dateOfBirth'], $row['address'], $row['mobile']);
            return $patient;
        }
    }

    public function addPatient($fullname, $dateOfBirth, $address, $mobile) {
        $dbConnection = new \DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null) {
            $sql = "INSERT INTO patients (fullname, dateOfBirth, address, mobile) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $fullname, \PDO::PARAM_STR);
            $stmt->bindValue(2, $dateOfBirth, \PDO::PARAM_STR);
            $stmt->bindValue(3, $address, \PDO::PARAM_STR);
            $stmt->bindValue(4, $mobile, \PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } else {
            return false;
        }
    } 

    public function editPatient($id, $fullname, $dateOfBirth, $address, $mobile) {
        $dbConnection = new \DBConnection();
        $conn = $dbConnection->getConnection();
        
        if ($conn != null) {
            $sql = "update patients set fullname = ?, dateOfBirth = ?, address = ?, mobile = ? where id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $fullname, \PDO::PARAM_STR);
            $stmt->bindValue(2, $dateOfBirth, \PDO::PARAM_STR);
            $stmt->bindValue(3, $address, \PDO::PARAM_STR);
            $stmt->bindValue(4, $mobile, \PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } else {
            return false;
        }
    } 

    public function deletePatient($id) {
        $dbConnection = new \DBConnection();
        $conn = $dbConnection->getConnection();
        
        if ($conn != null) {
            $sql = "DELETE FROM patients WHERE id = $id";
            $stmt = $conn->prepare($sql);
            $a = $stmt->execute();
                return $a;
        }
        return false;
    }
}