<?php
try{
    // Define variables and initialize with empty values
    $fullname = $address = $email = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Variables
        $fullname = trim($_POST["fullname"]);
        $address = trim($_POST["address"]);
        $email = trim($_POST["email"]);
        
        // Prepare an update statement
        $sql = "UPDATE customer 
                SET c_fullname = ?, c_address = ?, c_email = ?
                WHERE c_id = ?";
        
        $stmt = mysqli_prepare($conn, $sql);

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssi", $parFullname, $parAddress, $parEmail, $parId);
        
        // Set parameters
        $parFullname = $fullname;
        $parAddress = $address;
        $parEmail = $email;
        $parId = $_SESSION["id"];
        
        // Attempt to execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Redirect to profile page
        header("location: profile.php?update=true");
        exit();

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($conn);

    } else{

        // Prepare an update statement
        $sql = "SELECT * 
                FROM customer
                WHERE c_id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $parId);
        
        // Set parameters
        $parId = $_SESSION["id"];

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Store the result
        $result = mysqli_stmt_get_result($stmt);

        // Populate the form with previous data
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_row($result)) {
                $fullname = $row[1];
                $address = $row[2];
                $email = $row[3];
            }
        } 
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($conn);

} catch(mysqli_sql_exception $e){ 

    // Store error code and message in error log file
    error_log($e->getCode());
    error_log($e->getMessage());
    
    // Close connection and display readable message
    exit(header("location: error.php"));
}
?>