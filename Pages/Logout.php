<?php
include 'Database/conn.php';
session_destroy();
header('location:Login.php');
?>