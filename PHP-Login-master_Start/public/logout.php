<?php
session_start();
require_once '../src/session.php';
$session = new session();
$session->forgetSession();
?>
