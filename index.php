<?php
session_start();
include "db.php";
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}
?>




<html>
<head>
<title><h1>Quiz Master</h1></title>
<style>




    /* General Page Styling */
body {
    background-color: #ADD8E6; /* Light Blue */
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
    background: pink;
    border: 2px solid #000; /* Black Border */
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    text-colour: 
}

/* Button Styling */
.button {
    background-color: #4CAF50; /* Green */
    border: 2px solid #000;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
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

</style>
</head>
<body>
<header>
<div class="container">
<p><h1>Quiz Master</h1></p>
</div>
</header>
<main>
<div class="menu">
<a href="main.php" class="button">Take Quiz</a>
<a href="add.php" class="button">Click here if "Admin"</a>
</div>
</main>
</body>
</html>
