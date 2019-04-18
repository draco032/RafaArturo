<?php

class Contact
{
    private $name;
    private $phone;
    private $email;
    
    
    public function __construct($name, $phone, $email) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}

class AddressBook
{
    public $contacts = array();
    
    public function add($name, $phone, $email) {
        $contact = new Contact($name, $phone, $email);
        array_push($this->contacts, $contact);
    }
    
}

$ab = new AddressBook;
$ab->add("John", 123, "piteryus@email.com");
$ab->add("Titi", 789, "la_perrona@email.com");
foreach ($ab->contacts as $contact) {
    echo "Name:  ".$contact->getName().PHP_EOL;
    echo "Phone: ".$contact->getPhone().PHP_EOL;
    echo "Email: ".$contact->getEmail().PHP_EOL.PHP_EOL;
}