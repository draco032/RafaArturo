<?php
require_once 'MemoryAddressBook.php';
require_once 'FileAddressBook.php';

// $ab = new MemoryAddressBook();
$ab = new FileAddressBook();

// $ab->addContact(new Contact("John", "123-456-7895", "pitteryus@email.com"));
// $ab->addContact(new Contact("Titi", "156-456-3694", "la_perrona@email.com"));

// $c = new Contact("Selina");
// $c->setEmail("therealmalona@mail.com");
// $ab->addContact($c);

$viewType = isset($_GET['view']) ? $_GET['view'] : 'table';
// if (isset($_GET['view'])) {
//     $viewType = $_GET['view'];
// } else {
//     $viewType = 'table';
// }

if (isset($_GET['delete'])) {
    $ab->removeContact($_GET['delete']);
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $contactResult = $ab->searchContact($search);
    if ($contactResult != null) {
        renderListContacts(array($contactResult));
    }
} else {
    $search = "";
}

//PRUEBAS:
// $ab->removeContact(2);
//$ab->listContacts();
//$ab->searchContact("Titi");
//echo $ab->searchContact("Titi");

function renderListContacts ($contacts) {
    echo '<ul>';
    foreach ($contacts as $contact) {
        echo "<li>"."ID:  ".$contact->getId()."</br>";
        echo "Name:  ".$contact->getName()."</br>";
        echo "Phone: ".$contact->getPhone()."</br>";
        echo "Email: ".$contact->getEmail()."<a href=''>Edit</a><a href=''>Delete</a></li>";
    }
    echo '</ul>';
}

function renderTable ($contacts) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th></th></tr>";
    foreach ($contacts as $contact) {
        echo "<tr>";
        echo "<td>" . $contact->getId() . "</td>";
        echo "<td>" . $contact->getName() . "</td>";
        echo "<td>" . $contact->getPhone() . "</td>";
        echo "<td>" . $contact->getEmail() . "</td>";
        echo '<td><a href="?delete=' . $contact->getId() . '">Delete</a></td>';
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Address Book</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>Contacts List</h1>
        <form action="" method="get">
            Search: <input type="text" name="search" value="<?php echo $search ?>" />
            <button type="submit">Search</button>
        </form>
        <?php
            if ($viewType == 'list') {
                renderListContacts($ab->getContacts());
            } else {
                renderTable($ab->getContacts());
            }
        ?>
    </body>
</html>
