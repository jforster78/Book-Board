<?php
try{
    if(isset($_POST["submit"])){

        // Prepare the select statement
        $sql = "SELECT p_id, p_departure, p_destination, p_hotel
                FROM product
                WHERE p_departure = ?
                AND p_destination = ? 
                OR p_hotel = ?";

        $stmt = mysqli_prepare($conn, $sql);

        // Bind variables to the statement
        mysqli_stmt_bind_param($stmt, "sss", $parDepart, $parDest, $parHotel);

        // Set parameters
        $parDepart = $_POST["departure"];
        $parDest = $_POST["destination"];
        $parHotel = $_POST["hotel"];

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Store the result
        $result = mysqli_stmt_get_result($stmt);

        // Populate the table if there is 1 or more rows
        if ($result->num_rows > 0) {
            while($row = mysqli_fetch_row($result)) {
                echo "<tr>" . 
                       "<td>".htmlspecialchars($row[0])."</td>".
                       "<td>".htmlspecialchars($row[1])."</td>".
                       "<td>".htmlspecialchars($row[2])."</td>".
                       "<td>".htmlspecialchars($row[3])."</td>".
                     "</tr>";
            }

        // If there are 0 rows 
        } else {
            echo  "<tr>" . 
                    "<td>"."0 results, Please try another search"."<td>".
                    "<td>". "" ."<td>".
                  "</tr>";
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
    
    // Close connection and display readable error message
    exit(header("location: error.php"));
}
?>