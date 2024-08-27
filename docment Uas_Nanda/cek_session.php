<?php
 /**
     * NIM : 2257401072
     * NAMA : NANDA RIZKI NURAHYAT
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>