<?php
session_start();

$DB_HOST = 'niclashaxholm.dk.mysql';
$DB_USER = 'niclashaxholm_dk';
$DB_PASS = 'WW8cJyRnmht2dWLD62Cixdu2';
$DB_NAME = 'niclashaxholm_dk';

$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($link->connect_error) {
    die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8');

require 'functions.php';
?>
