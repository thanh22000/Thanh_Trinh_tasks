<?php 
$title="Exercise 3";
include "header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators (variable.php) </h3>

<h2> 
    1. Create a simple html form to get Firstname and Lastname from the user and use
    echo statement to print using tag: Hello …., You are welcome to my site.
</h2>

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


<?php include "footer.php" ?>