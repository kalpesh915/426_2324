<?php
    //print_r($_ENV);
    echo "<table align='center' border='2'>";
    foreach(getenv() as $key => $value){
        echo "<tr>
            <td>$key</td>
            <td>$value</td>
        </tr>";
    }
    echo "</table>"; 
?>