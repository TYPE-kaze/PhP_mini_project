<?php
namespace App;
class Patient {
    private $id;
    private $fullname;
    private $dateOfBirth;
    private $address;
    private $mobile;

    public function __construct($id, $fullname, $dateOfBirth, $address, $mobile)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->mobile = $mobile;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFullName() {
        return $this->fullname;
    }

    public function setFullName($fullname) {
        $this->fullname = $fullname;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }
}