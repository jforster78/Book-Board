<?php
// Database credentials
$host = "localhost";
$database = "book&board";
$user = "root";
$password = "Uni0fDerby";

// Allows MySQLi to throw exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    // Try connecting to the database with mysqli_connect
    $conn = mysqli_connect($host, $user, $password, $database);
} 

// If connection fails, show exception details
catch(mysqli_sql_exception $e){ 

    // Store error code and message in error log file
    error_log($e->getCode());
    error_log($e->getMessage());
    
    // Close connection and display readable message
    exit(header("location: error.php"));
}
?>