<?php 
$title="Exercise 3";
include "layout/header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators (variable.php) </h3>

<h3> 
    1. Create a simple html form to get Firstname and Lastname from the user and use
    echo statement to print using tag: Hello …., You are welcome to my site.
</h3>

<form action="action.php" method="post">
    <div class="row">

        <div class="col">
            <input type="text" placeholder="First Name" name="fname" required> <br> 
        </div>
        <div class="col">
            <input type="text" placeholder="Last Name" name="lname" required> <br> 
        </div>
    </div>

            Birth Date: <input type="date" name="bdate" required> <br>
            Select fav color: <input type="color" name="fcolor" required> <br>
            <input type="submit" value="Submit">
    </form>

<h3> 3. Prepare a simple html table and apply bootstrap style to the table. </h3>

<table class="table">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Grade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Pekka</td>
            <td>5</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Johanna</td>
            <td>4</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>5</td>
        </tr>
    </tbody>
</table>

<h3> 4. Write a PHP script with two string variables. 
    Assign any text to these variables. Join them together.  
    Print the length of the string. 
</h3>

    <?php 
    $string1 = "I am";
    $string2 = "Luke.";
    echo $string1 ." ". $string2;
    echo "<br><br>";
    echo strlen($string1 ." ". $string2);
    ?>

<h3> 5. Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and echo statement to output your answer.
</h3>
    <?php
        $n1=298;
        $n2=234;
        $n3=46;
        echo $n1+$n2+$n3;
    ?>


<h3> 6. Write a PHP script to detect the browser being used to view your pages. </h3>

    <?php
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    ?>

<h3> 7. Write a PHP script in the footer section of your universal footer 
    just below the Copyright information to 
    display the last modification time of a file.
</h3>

<?php include "layout/footer.php" ?>