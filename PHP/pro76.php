<?php
/*  
    localeconv() 	Returns locale numeric and monetary formatting information
*/

    setlocale(LC_ALL,"US");
    $locale_info = localeconv();
    print_r($locale_info);
?>
