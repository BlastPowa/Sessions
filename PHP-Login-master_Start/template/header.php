<?php
session_start();
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Protected Page</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
