<?php
session_start();
include 'conn.php';
  header('location:Pages/Login.php');
session_destroy();
?>