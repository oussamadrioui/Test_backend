<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'todolisttt';
$dbcon = new mysqli('localhost', 'root', '', 'todolisttt');

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

