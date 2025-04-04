<?php

session_start();

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
.submit {
    
    background-color: white; /* Green */
    border: 2px solid #000;
    text: white;
    padding: 15px 32px;
    text-align: center;
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
<div class="submit">
<h2>Your Result</h2>
<p>Congratulation !! You have completed this test successfully.</p>
<p>Your <strong>Score</strong> is <?php echo $_SESSION['score'];?> </p>
<a href="index.php">Try Again</a> | <a href="index.php?logout=true">Logout</a>
<?php unset($_SESSION['score']); ?>
</div>
</main>
</body>
</html>