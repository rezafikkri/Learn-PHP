<?php

use Config\Database;

require_once __DIR__ . "/Database.php";

$dbh = Database::getConnection();
echo "Test membuat koneksi ke database.";
