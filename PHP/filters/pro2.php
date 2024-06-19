<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Filter ID</th>
            <th>Fllter Name</th>
        </tr>

        <?php
            foreach(filter_list() as $key => $value){
                echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>