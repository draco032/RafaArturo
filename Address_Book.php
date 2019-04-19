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
        echo "Name:  ".$contact->getName().PHP_EOL;
        echo "Phone: ".$contact->getPhone().PHP_EOL;
        echo "Email: ".$contact->getEmail().PHP_EOL.PHP_EOL;
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

$ab = new AddressBook;
$c = new Contact("John", "123-456-7895", "pitteryus@email.com");
$ab->addContact($c);
$c = new Contact("Titi", "156-456-3694", "la_perrona@email.com");
$ab->addContact($c);
$c = new Contact("Selina");
$c->setEmail("therealmalona@mail.com");
$ab->addContact($c);


//PRUEBAS: 
//$ab->listContacts();
//$ab->removeContact(0);
//$ab->listContacts();
//$ab->searchContact("Titi");

echo $ab->searchContact("Titi");