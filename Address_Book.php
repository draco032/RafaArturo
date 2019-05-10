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
        
    public function removeContact($index) {
        //remove by name?
        unset($this->contacts[$index]); 
    }
    
    public function listContacts() {
        foreach ($this->contacts as $contact) {
        echo "<li>"."Name:  ".$contact->getName()."</br>";
        echo "Phone: ".$contact->getPhone()."</br>";
        echo "Email: ".$contact->getEmail()."</li>";
        }
    }

    
    public function searchContact($search) {
        
        $index=0;
        foreach ($this->contacts as $value) {
            
            if ($search == $value->getName() ) {
                echo "\n"."Index: ".$index."\n";
                echo "Name:  ".$value->getName()."\n";
                echo "Phone: ".$value->getPhone()."\n";
                echo "Email: ".$value->getEmail()."\n";
                //need to count duplicate name(dont use brake)
                //break;
            }
            $index = $index+1;
        }
    }
}




