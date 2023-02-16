<?php 
$title = "Exercise 5";
include "layout/header.php"; ?>

<h3> 1. Write a php script to display courses as list </h3>
<?php 
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
for($i=0; $i<count($courses); $i++){
    echo $courses[$i]. "<br>";
}
?>

<h3> 2. The unset() function is used to remove element from the array. 
    The var_dump() function is used to dump information about a variable.  
    array_values() is an inbuilt function that returns all the values of an array and not the keys. </h3>
<h4> Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h4>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");



?>

<h3> 3. Sort the following array 
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
echo "a) Ascending order by value: ". implode(", ", $courses3) . "<br>";
ksort($courses3);
echo "a) Ascending order by key: ". implode(", ", $courses3) . "<br>";
arsort($courses3);
echo "a) Descending order by value: ". implode(", ", $courses3) . "<br>";
krsort($courses3);
echo "a) Descending order by key: ". implode(", ", $courses3) . "<br>";
?>

<h3>4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");</h3>
<?php 
$courses4=array("php", "html", "javascript", "cms", "project");
$courses4=array_flip($courses4);
$courses4=array_change_key_case($courses4, CASE_UPPER);
$courses4=array_flip($courses4);
for($i=0; $i<count($courses4); $i++){
    echo $courses4[$i]. "<br>";
}?>

<h3> 5. List all your favorite colors and their hexadecimal equivalents. 
    (associative arrays) </h3>
<?php
$color=array("Red"=>"#FF0000", "Lime"=>"#00FF00", "Blue"=>"#0000FF", "Yellow"=>"#FFFF00");
foreach($color as $x => $hexnum) {
    echo "$x's hexadecimal equivalents is $hexnum <br>";
}
?>

<h3> 6. PHP script to calculate and display average temperature, 
    five lowest and highest temperatures. </3>
<?php 
/*
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Write comments to explain the following code (when asked):
*/
echo "<hr><h4> Calculation average temperature: </h4>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : call a variable total temp = 0, put month_temp into an array.
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? : Using foreach to add all the temp of the month, then cal the avg temp.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do? : To ascending order from lowest temp to highest temp.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop : $temp_array_length-5 means last 5 values of the array, and the array is ascending from lowest to highest so it will print last 5 highest temp. 
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<?php include "layout/footer.php" ?>