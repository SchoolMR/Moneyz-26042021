<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Big Money</title>
</head>
<body>
    
    <table>

        <?php

        // Can make $row = 1 and $row < 9, but I prefer starting with 0
        for($row = 0; $row < 8; $row++)
        {
            // Start table row, can't have table data without table row
            echo "<tr>";

            for($col = 0; $col < 8; $col++)
            {

                $total = $row + $col;

                $chessPiece = !($total % 2) ? "blackPiece" : "whitePiece";
                echo "<td class=$chessPiece></td>";

            }

            // Close the row
            echo "</tr>";

        }

        ?>

    </table>

</body>
</html>