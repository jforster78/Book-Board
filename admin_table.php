<?php
try{
    // Prepare the select statement
    $sql = "SELECT p_departure, p_destination, p_hotel, o_created
            FROM product 
            INNER JOIN orders 
            ON product.p_id = orders.p_id";

    $stmt = mysqli_prepare($conn, $sql);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Store the result
    $result = mysqli_stmt_get_result($stmt);

    // Populate the table if there is 1 or more rows
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_row($result)){
            echo  "<tr>" . 
                    "<td>".htmlspecialchars($row[0])."</td>".
                    "<td>".htmlspecialchars($row[1])."</td>".
                    "<td>".htmlspecialchars($row[2])."</td>".
                    "<td>".htmlspecialchars($row[3])."</td>".
                  "</tr>";
        }
        // If there are 0 rows 
    } else {
        echo "<tr>" . 
               "<td>"."0 results"."<td>".
               "<td>". "" ."<td>".
             "</tr>";             
    }
    // Close statement
    mysqli_stmt_close($stmt);

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