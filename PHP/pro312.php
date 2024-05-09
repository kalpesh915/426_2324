<?php
    /*
        array_chunk() 	Splits an array into chunks of arrays
    */

    $data = array("Rajkot", "Baroda", "Surat", "Ahamdabad", "Bhuj", "Morbi", "Gandhinagar");

    print_r(array_chunk($data, 3));
?>