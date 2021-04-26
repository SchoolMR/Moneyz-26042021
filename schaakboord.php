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

        // Kan ook $row = 1 doen en $row < 8, maar ben meer gewent beginnen met de 0
        for($row = 0; $row < 7; $row++)
        {
            // Start de table row, kan geen table data zonder table row hebben
            echo "<tr>";

            for($col = 0; $col < 7; $col++)
            {

                $total = $row + $col;

                $chessPiece = !($total % 2) ? "blackPiece" : "whitePiece";
                echo "<td class=$chessPiece></td>";

            }

            // Sluit table row af!
            echo "</tr>";

        }

        ?>

    </table>

</body>
</html>
