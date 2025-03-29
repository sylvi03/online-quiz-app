<?php
session_start();
include "config.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $score = 0;
    foreach ($_POST['answer'] as $id => $selected_option) {
        $query = $conn->query("SELECT correct_option FROM questions WHERE id = $id");
        $correct_option = $query->fetch_assoc()['correct_option'];

        if ($selected_option == $correct_option) {
            $score++;
        }
    }

    $username = $_SESSION['username'];
    $conn->query("INSERT INTO scores (username, score) VALUES ('$username', '$score')");
    header("Location: scoreboard.php");
}

$questions = $conn->query("SELECT * FROM questions LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
<title>Quiz</title></head>
<body>
<h2>Quiz</h2>
<form method="POST">
    <?php while ($row = $questions->fetch_assoc()): ?>
        <p><strong><?= $row['question'] ?></strong></p>
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <input type="radio" name="answer[<?= $row['id'] ?>]" value="<?= $i ?>"> <?= $row["option$i"] ?><br>
        <?php endfor; ?>
    <?php endwhile; ?>
    <input type="submit" name="submit" value="Submit Quiz">
</form>
</body>
</html>
