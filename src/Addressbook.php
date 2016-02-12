<?php
    class Contact
    {
        private $name;
        private $phone_number;
        private $address;

        function __construct($contact_name, $contact_phone, $contact_address)
        {
            $this->name = $contact_name;
            $this->phone_number = $contact_phone;
            $this->address = $contact_address;
        }
        // -- Setters -- //
        function setName($new_name)
        {
            $this->name = $new_name;
        }
        function setPhoneNumber($new_phone_number)
        {
            $this->phone_number = $new_phone_number;
        }
        function setAddress($new_address)
        {
            $this->new_address = $new_address;
        }
        // -- Getters -- //
        function getName()
        {
            return $this->name;
        }
        function getPhoneNumber()
        {
            return $this->phone_number;
        }
        function getAddress()
        {
            return $this->address;
        }
        // -- Session -- //
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
