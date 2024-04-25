<?php
/*  
    levenshtein() 	Returns the Levenshtein distance between two strings

    levenshtein(string1,string2,insert,replace,delete)
    
    string1 	Required. First string to compare
    string2 	Required. Second string to compare
    insert 	    Optional. The cost of inserting a character. Default is 1
    replace 	Optional. The cost of replacing a character. Default is 1
    delete 	    Optional. The cost of deleting a character. Default is 1
*/

    echo levenshtein("Hello Worldk","Hello Worldd", 1, 2, 3);
?>
