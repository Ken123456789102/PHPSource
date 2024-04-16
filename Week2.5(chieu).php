<!DOCTYPE html>
<html lang="en">
<head>
<style>.error {color: #FF0000;} </style>
</head>
<body>

<?php
// Define variables and set them to empty values
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

/*if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
} else {
    $name = $_POST["name"];
}
if (empty($_POST["email"])){
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
}*/
// Function to sanitize input data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Tên là bắt buộc";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email là bắt buộc";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["website"])) {
    $websiteErr = "Website là bắt buộc";
  } else {
    $website = test_input($_POST["website"]);
  }
  if (empty($_POST["comment"])) {
    $commentErr = "Comment là bắt buộc";
  } else {
  $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender là bắt buộc";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
<script src="script.js"></script> </body>
</html>