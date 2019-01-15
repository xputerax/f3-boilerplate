<?php
$db_host = getenv('DB_HOST');
$db_port = getenv('DB_PORT');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$dsn = "mysql:host={$db_host};port={$db_port};dbname={$db_name}";

$database_instance = new DB\SQL($dsn, $db_user, $db_password);

return $database_instance;