<?php
/*  
    parse_str() 	Parses a query string into variables
*/

    $queryString = "fname=zeel&lname=nimavat&city=rajkot&age=19";

    parse_str($queryString, $result);

    print_r($result);
?>
