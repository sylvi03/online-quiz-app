<?php

include 'db.php';

$query = "SELECT * FROM questions";

$total_questions = mysqli_num_rows(mysqli_query($connection, $query));
?>

<html>
<head>
<title>Quiz</title>
<style>
   
    /* General Page Styling */
body {
    background-color: orange;
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
}

/* Main Container - Centers Content */
.container {
    width: 30%;
    margin: 30px auto;
    padding: 20px;
    background: white;
    border: 2px solid #000; /* Black Border */
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    text-alignment: center;
}

/* Button Styling */
.button {
    background-color: #4CAF50; /* Green */
    border: 2px solid #000;
    color: white;
    padding: 15px 32px;
    text-align: center;
    display: block;
    font-size: 16px;
    width: 70%;
    margin: 20px auto; /* Centered */
    border-radius: 5px;
    cursor: pointer;
}

.button:hover {
    background-color: #45a049; /* Darker Green */
}

/* Menu Box */
.menu {
    width: 300px;
    height: 300px;
    margin: 20px auto;
    border: 2px solid black;
    background-color: white;
    border-radius: 10px;
    padding: 10px;
}

/* Start Link */
a.start {
    display: inline-block;
    color: #666;
    border: 1px dotted #000;
    padding: 6px 13px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 20px;
}

/* List Styling */
li {
    list-style: none;
    padding: 5px 0;
}

/* Highlighted Section */
.current {
    padding: 10px;
    background: #f4f4f4;
    border: 1px dotted #000;
    margin: 20px 0 10px 0;
    text-align: center;
    font-weight: bold;
}
.submit {
    background-color: blue; /* Green */
    border: 2px solid #000;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-color: white;
    display: block;
    font-size: 16px;
    width: 70%;
    margin: 20px auto; /* Centered */
    border-radius: 5px;
    cursor: pointer;
}


</style>

</head>
<body>
<header>
<div class="container">
<p><h1>Quiz Master</h1></p>
</div>
</header>
<main>
<div class="container">
<h2>Test Your PHP Knowledge</h2>
<p>
This is a multiple choise quiz to test your PHP Knowledge.
</p>
<ul>
<li><strong><h5>Number of Questions:</h5></strong><h5><?php echo $total_questions; ?> </h5></li>
<li><strong>Type:</strong> Multiple Choice</li>
<li><strong>Estimated Time:</strong><?php echo $total_questions * 1.5; ?>minutes</li>
</ul>
<a href="question.php?n=1" class="start"><h4>Start Quiz</h4></a>
</div>
</main>
</body>
</html>