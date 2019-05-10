<?php
require_once 'Address_Book.php';
$ab = new AddressBook;
$c = new Contact("John", "123-456-7895", "pitteryus@email.com");
$ab->addContact($c);
$c = new Contact("Titi", "156-456-3694", "la_perrona@email.com");
$ab->addContact($c);
$c = new Contact("Selina");
$c->setEmail("therealmalona@mail.com");
$ab->addContact($c);
//PRUEBAS: 
//$ab->removeContact(0);
//$ab->listContacts();
//$ab->searchContact("Titi");
//echo $ab->searchContact("Titi");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Address Book</title>
    </head>
    <body>
        <h1>Contacts List</h1>
        <ul>
            <?php
                $ab->listContacts();
            ?>
        </ul>
    </body>
</html>
