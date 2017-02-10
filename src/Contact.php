<?php
    class Contact
    {
        private $name;
        private $phone;
        private $email;
        private $address;

        function __construct($contact_name, $contact_phone, $contact_email, $contact_address)
        {
            $this->name = $contact_name;
            $this->phone = $contact_phone;
            $this->email = $contact_email;
            $this->address = $contact_address;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }

        function setEmail($new_email)
        {
            $this->email = $new_email;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getName()
        {
            return $this->name;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getEmail()
        {
            return $this->email;
        }

        function getAddress()
        {
            return $this->address;
        }

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
