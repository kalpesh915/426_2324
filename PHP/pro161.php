<?php
    /*
        PHP const Array
    */ 

    const CITY = ["Rajkot", "Baroda", "Surat", "Jamnagar", "Bhuj", "Ahamdabad", "Gandhinagar"];

    function greetings() {
        echo "Welcome to ".CITY[1];    
    }
    
    greetings();
?>