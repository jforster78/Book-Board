<?php
// Include DB file
require_once "dbConn.php";

try{
    // Empty variables
    $username = $password = $confirmPassword = "";
    $usernameError = $passwordError = $confirmPasswordError = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate username
        if(empty(trim($_POST["username"]))){
            $usernameError = "Enter your username";     
        } else{

            // Prepare the select statement
            $sql = "SELECT c_id 
                    FROM customer 
                    WHERE c_username = ?";
        
            $stmt = mysqli_prepare($conn, $sql);

            // Bind variables to the statement
            mysqli_stmt_bind_param($stmt, "s", $parUsername);
            
            // Set parameters
            $parUsername = trim($_POST["username"]);
            
            // Execute the statement
            mysqli_stmt_execute($stmt);
                
            // Store the result
            mysqli_stmt_store_result($stmt);
            
            // Checks to see if username is taken
            if(mysqli_stmt_num_rows($stmt) == 1){ 
                $usernameError = "This username is already in use, please login";
            } else{
                $username = trim($_POST["username"]);
            }

            // Close statement
            mysqli_stmt_close($stmt);    
        }

        // Validate password
        if(empty(trim($_POST["password"]))){
            $passwordError = "Enter a password";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $passwordError = "Password must be at least 6 characters";
        } else{
            $password = trim($_POST["password"]);
        }

        // Validate confirmed password
        if(empty(trim($_POST["confirmPassword"]))){
            $confirmPasswordError = "Confirm password";     
        } else{
            $confirmPassword = trim($_POST["confirmPassword"]);
            if(empty($passwordError) && ($password != $confirmPassword)){
                $confirmPasswordError = "Password did not match";
            }
        }

        // Check input errors before inserting in database
        if(empty($usernameError) && empty($passwordError) && empty($confirmPasswordError)) {
            
            // Prepare the insert statement
            $sql = "INSERT INTO customer (c_username, c_password) 
                    VALUES (?, ?)";
            
            $stmt = mysqli_prepare($conn, $sql);

            // Bind to the statement
            mysqli_stmt_bind_param($stmt, "ss", $parUsername, $parPassword);
            
            // Set parameters
            $parUsername = $username;
            $parPassword = password_hash($password, PASSWORD_DEFAULT); // Password is hashed
            
            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Redirect to login page
            header("location: login.php?registered=true");

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