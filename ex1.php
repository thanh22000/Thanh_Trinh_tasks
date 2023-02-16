<?php 
$title = 'Excercise 1';
include 'layout/header.php';?>
<h3> 3.1 Write a simple PHP script to print your information </h3>
<?php
echo "Thanh Trinh <br>";
echo "BBCAP22";
?>

<h3> 3.2 Write PHP code to display the following message </h3>
<?php
echo "Hello World! My name is \"Thanh\" aka \"Luke\"! <br>";
echo "BBCAP22";
?>

<h3> 3.3 Write the PHP code in to display the current date </h3>
<?php 
echo date("d.m.y");
?>

<h3> 3.4 Put this variable as a title marked as h1 in your HTML document </h3>
<?php echo "<h1> \$title = \"PHP is interesting\" </h1>";?>

<h3> 3.5 Use HTML table into echo and include 3 columns S.N, Name, and Grade </h3>
<?php 
    echo "  <table>
                <thead>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Pekka</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Johanna</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>John</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>"; ?>

<h3> 4. Take a screeshot that verifies, 
    you have set up the development environment 
    and include it as an image in ex1.php </h3>
<?php echo '<img src="images/ex1.jpg" style="length: 880px; width: 660px;">';?>

<?php 
include 'layout/footer.php';
?>