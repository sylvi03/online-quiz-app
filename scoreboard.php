<?php
session_start();
include "config.php";

$scores = $conn->query("SELECT * FROM scores ORDER BY score DESC, created_at ASC LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="assets/css/style.css">
<title>Scoreboard</title></head>
<body>
<h2>Leaderboard</h2>
<table border="1">
    <tr><th>Username</th><th>Score</th></tr>
    <?php while ($row = $scores->fetch_assoc()): ?>
        <tr><td><?= $row['username'] ?></td><td><?= $row['score'] ?></td></tr>
    <?php endwhile; ?>
</table>
<a href="quiz.php">Try Again</a> | <a href="index.php?logout=true">Logout</a>
</body>
</html>
