<?php
// Initialize the session
session_start();

// Check if the user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    // Checks if user is admin or other
    if($_SESSION["isAdmin"] == 1){

        // Redirect system admin to admin page
        header("location: admin.php");
        
    } else{

        // Redirect user to profile page
        header("location: profile.php");
    }
    exit;
}

// Include DB file
require_once "dbConn.php";
 
try{
    // Empty variables
    $username = $password = "";
    $usernameError = $passwordError = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Validate username
        if(empty(trim($_POST["username"]))){
            $usernameError = "Please enter your username.";
        } else{
            $username = trim($_POST["username"]);
        }

        // Validate password
        if(empty(trim($_POST["password"]))){
            $passwordError = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }

        // Validate credentials
        if(empty($usernameError) && empty($passwordError)){

            // Prepare the select statement
            $sql = "SELECT c_id, c_username, c_password, c_isAdmin
                    FROM customer 
                    WHERE c_username = ?";
            
            $stmt = mysqli_prepare($conn, $sql);

            // Bind variables to the statement
            mysqli_stmt_bind_param($stmt, "s", $parUsername);
            
            // Set parameters
            $parUsername = $username;
            
            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Store the result
            mysqli_stmt_store_result($stmt);

            // Check the username exists and verify password
            if(mysqli_stmt_num_rows($stmt) == 1){ 

                // Bind the result 
                mysqli_stmt_bind_result($stmt, $id, $username, $hashedPassword, $isAdmin);
                
                mysqli_stmt_fetch($stmt);

                // Verify password
                if(password_verify($password, $hashedPassword)){
                  
                    // Store data in session
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;  
                    $_SESSION["isAdmin"] = $isAdmin;                           
                    
                    // Checks if user is a system admin
                    if(!isset($_SESSION["isAdmin"]) || $_SESSION["isAdmin"] != 1){

                        // Redirect to profile page
                        header("location: profile.php");

                    } else{

                        // Redirect to admin page
                        header("location: admin.php");
                    }
                    
                } else{

                    // If the password is not valid
                    $passwordError = "The password you entered was not valid.";
                }
                
            } else{

                // Display an error message if username doesn't exist
                $usernameError = "No account found with that username.";
            }
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