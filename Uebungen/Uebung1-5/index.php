<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";
    }
    //Noch nicht angefangen

?>
<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername">
    <input type="submit" value="Absenden">
</form>