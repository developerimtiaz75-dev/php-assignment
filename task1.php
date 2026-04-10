<?php

$users = [" rAHim@gmail.com ", " kArim@outlook.com ", " sUmi@yahoo.com "];

foreach ($users as $user) {

    // Trim spaces
    $user = trim($user);

    // Split email
    $parts = explode("@", $user);

    // Name formatting
    $name = ucfirst(strtolower($parts[0]));

    // Domain extract
    $domain = $parts[1];

    echo "Name: $name, Domain: $domain\n";
}

?>
