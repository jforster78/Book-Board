<?php
// Include session file
include "session.php";
// Include DB file
require "dbConn.php";

try{
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "GET"){

        // Turn off transactions
        mysqli_autocommit($conn, false);
       
        // Prepare a delete statement
        $sql = "DELETE FROM orders
                WHERE c_id = ?";
        
        $stmt1 = mysqli_prepare($conn, $sql);

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt1, "i", $parId);
        
        // Set parameters
        $parId = $_SESSION["id"];
        
        // Eexecute the statement
        mysqli_stmt_execute($stmt1);

        // Close statement
        mysqli_stmt_close($stmt1);

        // Prepare a delete statement
        $sql = "DELETE FROM customer
                WHERE c_id = ?";
        
        $stmt2 = mysqli_prepare($conn, $sql);

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt2, "i", $parId);
        
        // Execute the statement
        mysqli_stmt_execute($stmt2);
        
        // Close statement
        mysqli_stmt_close($stmt2);

        // Turn on transactions
        mysqli_autocommit($conn, true);

        // Redirect to profile page
        session_destroy();
        header("location: register.php?delete=true");
        exit();
        
        // Close connection
        mysqli_close($conn);
    } 
    
} catch(mysqli_sql_exception $e){ 

    // Remove all queries from the queue if there is an error (undo)
    mysqli_rollback($conn);

    // Store error code and message in error log file
    error_log($e->getCode());
    error_log($e->getMessage());
    
    // Close connection and display readable message
    exit(header("location: error.php"));
}
?>