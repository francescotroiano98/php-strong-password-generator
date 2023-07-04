<?php

function generateRandomPassword($passwordsize) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=[]{}|;:,.<>?';
    $password = '';

    for ($i = 0; $i < $passwordsize; $i++) {
        $randomIndex = random_int(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

?>