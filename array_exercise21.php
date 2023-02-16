<?php 
$title ="Array Ex21";
include "layout/header.php" ?>

<form action="" method="get">
    <input type="number" step="any" placeholder="Enter your first number" name="num1" required> <br>
    <input type="number" step="any" placeholder="Enter your second number" name="num2" required> <br>
    <select name="operator">
        <option value="add"> Add </option>
        <option value="sub"> Subtract </option>
        <option value="mul"> Multiply </option>
        <option value="div"> Divide </option>
    </select> <br>
    <input type="submit" name="calculate" value="Calculate">
</form>
<?php
if (isset($_GET["calculate"])){
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $operator=$_GET["operator"];
    switch($operator){
        case "add":
            $result=$num1+$num2;
            break;
        case "sub":
            $result=$num1-$num2;
            break;
        case "mul":
            $result=$num1*$num2;
            break;
        case "div":
            $result=$num1/$num2;
            break;
        default:
            $result="Error: You have not selected the correct operator";
    }
}
if (isset($result)){
    echo "<h2> Result: $result </h2>";
}
?>



<?php include "layout/footer.php" ?>
