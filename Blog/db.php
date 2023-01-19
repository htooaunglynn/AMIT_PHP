<?php
define("dbhost", "localhost");
define("dbuser", "root");
define("dbpassword", "");
define("dbname", "online_shop");

$db_connection = mysqli_connect(dbhost, dbuser, dbpassword, dbname);

if (!$db_connection) {
    echo mysqli_connect_error();
} 