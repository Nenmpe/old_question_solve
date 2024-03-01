<?php
// CHESS BOARD CREATION

// Define dimensions of the chessboard
$rows = 8;
$cols = 8;

// Loop through each row
for ($i = 0; $i < $rows; $i++) {
    echo "<div style='clear: both;'>"; // Start a new row

    // Loop through each column
    for ($j = 0; $j < $cols; $j++) {
        $total = $i + $j;

        // Determine cell color based on row and column index
        if ($total % 2 == 0) {
            // For even sum of row and column index, set the cell color to white
            echo "<div style='width: 50px; height: 50px; float: left; background-color: white;'></div>";
        } else {
            // For odd sum of row and column index, set the cell color to black
            echo "<div style='width: 50px; height: 50px; float: left; background-color: black;'></div>";
        }
    }

    echo "</div>"; // End of the row
}

?>
