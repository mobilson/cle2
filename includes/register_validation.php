<?php
$errors = [];


if (empty($firstName)) {
    $errors['firstName'] = "Er moet een voornaam ingevuld worden";
}

if (empty($lastName)) {
    $errors['lastName'] = "Er moet een achternaam ingevuld worden";
}

if (empty($email)) {
    $errors['email'] = "Er moet een email ingevuld zijn";
}

if (empty($number)) {
    $errors['number'] = "Er moet een email ingevuld zijn";
}

if (!is_numeric($number) || strlen($number) > 12 || strlen($number < 8))
    $errors['number'] = "Dit is niet een geldig nummer";

if (!str_contains($email, '@') && !empty($email)) {
    $errors['email'] = "Ongeldig email";
}


if (empty($password)) {
    $errors['password'] = "Er moet een wachtwoord ingevuld zijn";
}

if (strlen ($password) < 6) {
    $errors['password'] = "Wachtwoord moet tenminste 6 lang zijn";
}
