<?php

class Contact
{
    private $name;
    private $phone;
    private $email;
    
    
    public function __construct($name, $phone=null, $email=null) {
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
    public $contact;
    
    public function addContact($contact) {
        array_push($this->contacts, $contact);
    }
    
    public function listContacts() {
        foreach ($this->contacts as $contact) {
        echo "Name:  ".$contact->getName().PHP_EOL;
        echo "Phone: ".$contact->getPhone().PHP_EOL;
        echo "Email: ".$contact->getEmail().PHP_EOL.PHP_EOL;
        }
    }
    
    public function removeContact($index) {
        //remove by name
        unset($this->contacts[$index]); 
    }
    
    
}

$ab = new AddressBook;
$c = new Contact("John", 123, "pitteryus@email.com");
$ab->addContact($c);
$c = new Contact("Titi", 789, "la_perrona@email.com");
$ab->addContact($c);
$c = new Contact("Selina");
$c->setEmail("therealmalo@mail.com");
$ab->addContact($c);

//$ab->listContacts();

//$ab->removeContact(0);
//$ab->listContacts();
