<?php

$players = [
    "Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Rahul Dravid",
    "Sourav Ganguly", "Kapil Dev", "Yuvraj Singh", "Anil Kumble", "Jasprit Bumrah"
];

echo "<html><head><title>Indian Cricket Players</title></head><body>";
echo "<h2>List of Indian Cricket Players</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>#</th><th>Player Name</th></tr>";

foreach ($players as $index => $player) {
    echo "<tr><td>" . ($index + 1) . "</td><td>" . $player . "</td></tr>";
}

echo "</table></body></html>";
?>