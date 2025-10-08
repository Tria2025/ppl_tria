<?php
//File: Validator.php
function validateAge($age) {
    if (!is_numeric($age)) {
        //skenario 1
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        //skenario 2
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}       

function validateName($name) {
    if (!is_string($name)) {
        //skenario 1
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    if (empty($name)) {
        //skenario 2
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    return true;
}