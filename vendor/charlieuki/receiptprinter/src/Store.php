<?php

namespace charlieuki\ReceiptPrinter;

class Store
{
    private $name = '';
    private $address = '';
    private $phone = '';
    private $email = '';

    function __construct($name, $address, $phone, $email) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }


    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }
}
