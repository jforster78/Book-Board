<?php 
try{
    // Prepare the select statement
    $sql = "SELECT c_fullname, c_address, c_email
            FROM customer 
            WHERE c_username = ?";

    $stmt = mysqli_prepare($conn, $sql);

    // Bind variables to the statement
    mysqli_stmt_bind_param($stmt, "s", $parUsername);

    // Set parameters
    $parUsername = $_SESSION["username"];

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Store the result
    $result = mysqli_stmt_get_result($stmt);

    // Populate the table if there is 1 or more rows
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_row($result)){
            echo  "<br />"."<p> Name: ".htmlspecialchars($row[0])."</p>",
                  "<p> Address: ".htmlspecialchars($row[1])."</p>",
                  "<p> Email: ".htmlspecialchars($row[2])."</p>";                         
        }
    } 

    // Close statement
    mysqli_stmt_close($stmt);
    
} catch(mysqli_sql_exception $e){ 

    // Store error code and message in error log file
    error_log($e->getCode());
    error_log($e->getMessage());
    
    // Close connection and display readable message
    exit(header("location: error.php"));
}
?>