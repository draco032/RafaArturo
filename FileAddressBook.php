<?php
require_once "Contact.php";

class FileAddressBook
{
    public function addContact($contact) {
        $contacts = $this->readFile();
        $contact->setId( count($contacts) + 1 );
        array_push($contacts, $contact);
        $this->writeFile($contacts);
    }

    public function removeContact($id) {
        $contacts = $this->readFile();
        $index = $this->getIndex($contacts, $id);
        array_splice($contacts, $index, 1);
        $this->writeFile($contacts);
    }

    private function getIndex($contacts, $id) {
        foreach ($contacts as $index => $contact) {
            if ($contact->id == $id) {
                return $index;
            }
        }
        return null;
    }

    public function searchContact($search) {
        $contacts = $this->getContacts();
        foreach ($contacts as $contact) {
            if ($search == $contact->getName() ) {
                return $contact;
            }
        }
        return null;
    }

    public function getContacts() {
        $contacts = $this->readFile();
        $contactsList = array();

        foreach ($contacts as $contact) {
            $c = new Contact($contact->name, $contact->phone, $contact->email);
            $c->setId($contact->id);
            array_push($contactsList, $c);
        }
        return $contactsList;
    }

    public function readFile() {
        $json = file_get_contents("contacts.json");
        return json_decode($json);
    }

    public function writeFile($contacts) {
        file_put_contents('contacts.json', json_encode($contacts));
    }
}
