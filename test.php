<?php
require_once 'FileAddressBook.php';

$ab = new FileAddressBook();

function printContacts ($contacts) {
  echo count($contacts) == 0 ? "No contacts\n" : "All contacts\n";
  foreach ($contacts as $contact) {
    echo $contact->getId() . "\t"
     . $contact->getName() . "\t"
     . $contact->getPhone() . "\t"
     . $contact->getEmail() . "\n";
  }
}

while (true) {
  printContacts($ab->getContacts());
  $name = readline("Name: ");
  $ab->addContact(new Contact($name));
}

