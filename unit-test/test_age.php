<?php
// File: test_age.php

//masukkan validator
require_once "validator.php";

// Test Case 1: umur valid
try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: " .$e->getMessage(). "\n";
}

// Test Case 2: nama valid
try {
    $result = validateName("Tria Silviana");
    echo "PASS: Nama 'Tria Silviana' diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Nama 'Tria Silviana' tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama kosong (string kosong)
try {
    validateName("");
    echo "PASS: Nama kosong seharusnya tidak diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Nama kosong ditolak dengan benar. Error: " . $e->getMessage() . "\n";
}