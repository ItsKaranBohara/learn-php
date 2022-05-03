<?php
  
// PHP Program to illustrate normal
// try catch block code
function demo($var) {
    echo " Before try block";
    try {
        echo "\n Inside try block";
              
        // If var is zero then only if will be executed
        if($var == 0)
        {
                  
            // If var is zero then only exception is thrown
            throw new Exception('Number is zero.');
                  
            // This line will never be executed
            echo "\n After throw (It will never be executed)";
        }
    }
          
    // Catch block will be executed only 
    // When Exception has been thrown by try block
    catch(Exception $e) {
            echo "\n Exception Caught", $e->getMessage();
        }
          
        // This line will be executed whether
        // Exception has been thrown or not 
        echo "\n After catch (will be always executed)";
}
  
// Exception will not be rised
demo(5);
  
// Exception will be rised here
demo(0);
?>