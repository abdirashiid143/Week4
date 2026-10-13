<?php

if (isset($_GET["submit"])) {

$errMsg = "";

echo "<h2>Student Information</h2>";

if (empty($_GET["fullname"]))
    $errMsg .= "<font color='red'>Please fill name required fields<br></font>";
if (empty($_GET["email"]))
    $errMsg .= "<font color='red'>Please fill email required fields<br></font>";

echo "Fullname: " . $_GET["fullname"] . "<br>";
echo "Email: " . $_GET["email"] . "<br>";
echo "Place of Birth: " . $_GET["pob"] . "<br>";

if (!empty($_GET["gender"]))
echo "Gender: " . $_GET["gender"] . "<br>";

echo "Faculty: " . $_GET["faculty"] . "<br>";

echo "Languages: ";
if(isset($_GET["languages"])) {
    foreach ($_GET["languages"] as $value) 
        echo "$value, ";
}
echo "<br>";

echo "Comment: " . $_GET["comment"] . "<br>";


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    
<form method="get" action="">

<h1>Student Registration Form</h1>

<fieldset>
    <legend>Personal Info </legend>

    <?php
       if (isset($errMsg)) echo $errMsg . "<br>";
    ?>

<label for="">Fullname: </label>
<input type="text" name="fullname"><br><br>

<label for="">Email: </label>
<input type="email" name="email"><br><br>

<label for="">Place of Birth: </label>
<input type="text" name="pob" id=""> <br><br>

<label for="">Gender: </label>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female <br><br>

<label for="">Faculty: </label>
<select name="faculty" id="">
    <option value="computer">Computer and IT</option>
    <option value="medicine">Medicine and Health Science</option>
    <option value="engineering">Engineering</option>
    <option value="ecom">Business</option>
</select> <br><br>

<label for="">Languages: </label>
<input type="checkbox" name="languages[]" value="Somali">Somali
<input type="checkbox" name="languages[]" value="English">English
<input type="checkbox" name="languages[]" value="Arabic">Arabic
<input type="checkbox" name="languages[]" value="Chinese">Chinese <br><br>

<label for="">Comment: </label>
<textarea name="comment" id="" rows="4" cols="30"></textarea><br><br>

<input type="submit" name="submit" value="Register">
<input type="reset" name="reset" value="Clear">

</fieldset>

</form>

</body>
</html>


