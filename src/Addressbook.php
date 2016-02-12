<?php
    class Contact {

        private $name;
        private $phone_number;
        private $address;

        // -- Setters -- //
        function setName($new_name) {
            $this->name = $new_name;
        }
        function setPhoneNumber($new_phone_number) {
            $this->phone_number = $new_phone_number;
        }
        function setAddress($new_address) {
            $this->new_address = $new_address;
        }
        // -- Getters -- //
        function getName() {
            return $this->name;
        }
        function getPhoneNumber() {
            return $this->phone_number;
        }
        function getAddress() {
            return $this->address;
        }
    }
?>
