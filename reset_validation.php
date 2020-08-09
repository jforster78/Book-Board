<?php
try{
    // Define variables and initialize with empty values
    $newPassword = $confirmPassword = "";
    $newPasswordErr = $confirmPasswordErr = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate new password
        if(empty(trim($_POST["newPassword"]))){
            $newPasswordErr = "Please enter a new password.";     
        } elseif(strlen(trim($_POST["newPassword"])) < 6){
            $newPasswordErr = "Password must have at least 6 characters.";
        } else{
            $newPassword = trim($_POST["newPassword"]);
        }
        
        // Validate confirmed password
        if(empty(trim($_POST["confirmPassword"]))){
            $confirmPasswordErr = "Please confirm the password.";
        } else{
            $confirmPassword = trim($_POST["confirmPassword"]);
            if(empty($newPasswordErr) && ($newPassword != $confirmPassword)){
                $confirmPasswordErr = "Password did not match.";
            }
        }
            
        // Check input errors before updating the database
        if(empty($newPasswordErr) && empty($confirmPasswordErr)){

            // Prepare an update statement
            $sql = "UPDATE customer 
                    SET c_password = ? 
                    WHERE c_id = ?";
            
            $stmt = mysqli_prepare($conn, $sql);

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $parPassword, $parId);
            
            // Set parameters
            $parPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $parId = $_SESSION["id"];
            
            // Execute the statement
            mysqli_stmt_execute($stmt);

                // Destroy the session and redirect to login page
                session_destroy();
                header("location: login.php?reset=true");
                exit();
           
            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
        mysqli_close($conn);
    }

} catch(mysqli_sql_exception $e){ 

    // Store error code and message in error log file
    error_log($e->getCode());
    error_log($e->getMessage());
    
    // Close connection and display readable message
    exit(header("location: error.php"));
}
?>