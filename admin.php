<?php
include "config.php";

if (isset($_POST['add'])) {
    $question = $_POST['question'];
    $opt1 = $_POST['option1'];
    $opt2 = $_POST['option2'];
    $opt3 = $_POST['option3'];
    $opt4 = $_POST['option4'];
    $correct = $_POST['correct_option'];

    $conn->query("INSERT INTO questions (question, option1, option2, option3, option4, correct_option) VALUES ('$question', '$opt1', '$opt2', '$opt3', '$opt4', '$correct')");
}

$questions = $conn->query("SELECT * FROM questions");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
<title>Admin Panel</title></head>
<body>
<h2>Manage Questions</h2>
<form method="POST">
    <input type="text" name="question" placeholder="Question" required><br>
    <input type="text" name="option1" placeholder="Option 1" required><br>
    <input type="text" name="option2" placeholder="Option 2" required><br>
    <input type="text" name="option3" placeholder="Option 3" required><br>
    <input type="text" name="option4" placeholder="Option 4" required><br>
    <input type="number" name="correct_option" placeholder="Correct Option (1-4)" required><br>
    <input type="submit" name="add" value="Add Question">
</form>
</body>
</html>
