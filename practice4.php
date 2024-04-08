<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["table-size"];

        if (!is_numeric($size) || $size <= 0) {
            echo "<p>Please enter a positive number.</p>";
        } else {
            echo "<h3>Multiplication Table for $size</h3>";
            echo "<table>";

            // Table header with column indexes
            echo "<tr><th></th>";
            for ($col = 1; $col <= $size; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

            // Table rows with row indexes and multiplication results
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    }
?>