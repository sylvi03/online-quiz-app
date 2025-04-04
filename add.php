<?php include 'db.php';
if(isset($_POST['submit'])){

$question_number = $_POST['question_number'];

$question_text = $_POST['question_text'];

$correct_choice = $_POST['correct_choice'];

// Choice Array
$choice = array();
$choice[1] = $_POST['choice1'];
$choice[2] = $_POST['choice2'];
$choice[3] = $_POST['choice3'];
$choice[4] = $_POST['choice4'];
$choice[5] = $_POST['choice5'];

// First Query for Questions Table
$query = "INSERT INTO `questions`(`question_number`,`question_text`)
VALUES ('$question_number','$question_text') ";


$result = mysqli_query($connection,$query);

//Validate First Query
if ($result) {
foreach ($choice as $option => $value) {
   if ($value != ""){
       if ($correct_choice == $option) {
         $is_correct = 1;
        }else{
            $is_correct = 0;
            }

            //Second Query for Choices Table
            $query = "INSERT INTO `options`(`question_number`, `is_correct`,`coption`)
           VALUES ('$question_number','$is_correct','$value')";

            $insert_row = mysqli_query($connection, $query);
            // Validate Insertion of Choices
            if ($insert_row) {
            continue;
            }else{
                die ("2nd Query for Choices could not be executed");
            }
        }
    }
    $message = "Question has been added successfully";
}
}

$query = "SELECT * FROM questions";
$questions = mysqli_query($connection, $query);
$total = mysqli_num_rows($questions);
$next = $total+1;

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
   
}

/* Button Styling */



.button:hover {
    background-color: red; /* Darker Green */
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
    text-decoration: none;
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
<h2>Add A Question</h2>
<?php if(isset($message)){
    echo "<h4>" . $message . "</h4>";
}?>

<form method="POST" action="add.php">
<p>
<label>Question Number: </label>
<input type="number" name="question_number" value="<?php echo $next; ?>">
</p>
<p>
<label>Question Text: </label>
<input type="text" name="question_text">
</p>
<p>
<label>Choice 1:</label>
<input type="text" name="choice1">
</p>
<p>
<label>Choice 2:</label>
<input type="text" name="choice2">
</p>
<p>
<label>Choice 3:</label>
<input type="text" name="choice3">
</p>
<p>
<label>Choice 4:</label>
<input type="text" name="choice4">
</p>
<p>
<label>Choice 5:</label>
<input type="text" name="choice5">
</p>
<p>
<label>Correct Option Number</label>
<input type="number" name="correct_choice">
</p>
<div class="submit">
    <input type="submit" name="submit" value="submit">
</div>
</form>
</div>
</body>
</html>