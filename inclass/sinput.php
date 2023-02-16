<?php
$title = 'Simple Input';
include "../layout/header.php";
?>
<?php
if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];

    echo "<h3> Your name is $first_name $last_name. </h3>";
}
else { ?>

<form action="" method="post">
    First Name: <input type="text" name="first_name" required> <br>
    Last Name: <input type="text" name="last_name" required> <br>
    <input type="submit" value="Submit">
</form>
<?php }
include "../layout/footer.php";
?>