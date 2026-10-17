<?php

if (isset($_GET["submit"])) {
    $nameerr = "";
    $emailerror = " ";
    $poberors="";
    $success = true;
    
    if(empty($_POST["fullname"])){
        $success =false ;
        $nameerr = "Please fill name required field";
    }
    if(empty($_POST["email"])){
        $success = false;
        $emailerror = "Please fill email required field";
    }
    if(empty($_POST["pob"])){
        $poberors = "Please fill place of birth required field";

    }

$errMsg = "";

echo "<h2>Student Information</h2>";

// if (empty($_GET["fullname"]))
//     $errMsg .= "<font color='red'>Please fill name required fields<br></font>";
// if (empty($_GET["email"]))
//     $errMsg .= "<font color='red'>Please fill email required fields<br></font>";

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
    
<form method="post" action="">

<h1>Student Registration Form</h1>
<style>
   .errors{
    color: red;
   } 
</style>

<fieldset>
    <legend><h2>Personal Info</h2> </legend>

    <?php
       if (isset($errMsg)) echo $errMsg . "<br>";
    ?>
<label for="">Fullname: </label>
<input type="text" name="fullname" value = " <?php if (isset($_POST["fullname"]) && !$success) echo $_POST["fullname"];?>"><br><br>
<span class ="errors"><?php if(isset($nameerr))echo $nameerr;?></span> <br>

<label for="">Email: </label>
<input type="email" name="email" value ="<?php if(isset($_POST["email"])&&!$success) echo $_POST["email"]?>"><br><br>
<span class="errors"><?php if(isset($emailerror)) echo $emailerror ;?></span><br>


<label for="">Place of Birth: </label>
<input type="text" name="pob" value=" <?php if(isset($_POST["pob"]) && !$success) echo $_POST["pob"]?>"> <br><br>
<span class="errors"><?php if(isset($poberors)) echo $poberors ;?></span><br>
<label for="">Gender: </label>
<input type="radio" name="gender" value="<?php if(isset($_POST["gender"]) &&!$success && $_POST["gender"]=="male")echo "checked";?>">male

<input type="radio" name="gender" value="<?php if (isset($_POST["gender"])&&!$success && $_POST["gender"]=="female")echo "checked";?>"> female<br><br>

<label for="">Faculty: </label>
<select name= "faculty" id="">
    <option value="computer" <?php if(isset($_POST["faculty"]) &&!$success && $_POST["faculty"]=="computer") echo "selected";?>>Computer and IT</option>

    <option value="medicine" <?php if(isset($_POST["faculty"]) &&!$success && $_POST["faculty"]=="medicine") echo "selected";?>>Medicine and Health Science</option>
    <option value="engineering" <?php if(isset($_POST["faculty"]) &&!$success && $_POST["faculty"]=="engineering") echo "selected"?>>Engineering</option>
    <option value="ecom"<?php if(isset($_POST["faculty"]) &&!$success && $_POST["faculty"]=="ecom" ) echo "selected"; ?>>Business</option>
</select> <br><br>

<label for="">Languages: </label>
<input type="checkbox" name="languages[]" value="Soomaali">Soomaali


<input type="checkbox" name="languages[]" value="English" <?php if(isset($_POST["languages"]) && !$success && in_array("English", $_POST["Languages"])) echo "checked";?>>English
<input type="checkbox" name="languages[]" value="Arabic" <?php if(isset($_POST["languages"]) && !$success && in_array("Arabic" , $_POST["Languages"])) echo "checked";?>>Arabic
<input type="checkbox" name="languages[]" value="Chinese" <?php if(isset($_POST["languages"])&& !$success && in_array("Chinese", $_POST["Languages"])) echo "checked";?>>Chinese <br><br>

<label for="">Comment: </label>
<textarea name="comment" id="" rows="4" cols="30" <?php if(isset($_POST["comment"])&&!$success)echo $_POST["comment"];?>></textarea><br><br>

<input type="submit" name="submit" value="Register">
<input type="reset" name="reset" value="Clear">
<input type="reset" name="reset" value="Forget">

</fieldset>

</form>

</body>
</html>


