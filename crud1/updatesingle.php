<?php
$title = "Update your info";
include 'dp.php';
include '../layout/header.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"Select * from studentinfo where id='$a'");
$row = mysqli_fetch_array($result);?>

<h2> Update your information below </h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname']; ?>"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname']; ?>"> <br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"> <br><br>
    <select name="groupid" value="<?php echo $row['groupid']; ?>">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select> <br><br>
    
    <input type="submit" value="Update" name="update"> <br><br>
    <input type="submit" value="Delete" name="delete"> <br><br>

</form>

<?php 
if (isset($_POST['update'])){
    $fname=$_POST['fname'];
    $fname=$_POST['lname'];
    $fname=$_POST['city'];
    $fname=$_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo 
    set fname='$fname',lname='$lname',city='$city',groupid='$groupid' 
    where id='$a'");
    if($query){
        echo "<h2> Your information is updated successfully </h2>";
    }
    else {
        echo "<h2> Record not modified </h2>";
    }
}

if (isset($_POST['delete'])){
    $query = mysqli_query($conn, "DELETE FROM studentinfo  
    where id='$a'");
    if($query){
        echo "<h2> Your information is deleted successfully </h2>";
    }
    else {
        echo "<h2> Record not modified </h2>";
    }
}



?>
<?php include '../layout/footer.php'; ?>