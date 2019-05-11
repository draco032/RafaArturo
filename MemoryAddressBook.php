<?php
require_once "Contact.php";

class MemoryAddressBook
{
    private $contacts = array();

    public function addContact($contact) {
        $contact->setId( count($this->contacts) + 1 );
        array_push($this->contacts, $contact);
    }

    public function removeContact($id) {
        foreach ($this->contacts as $index => $contact) {
            if ($contact->getId() == $id) {
                unset($this->contacts[$index]);
                break;
            }
        }
    }

    public function searchContact($search) {
        foreach ($this->contacts as $contact) {
            if ($search == $contact->getName() ) {
                return $contact;
            }
        }
        return null;
    }

    public function getContacts() {
        return $this->contacts;
    }
}
