<?php
include ('connection.php');
$RollNo =$_POST['rollno'];
    $Name =$_POST['name'];
    $Class =$_POST['class'];
    $query = "INSERT INTO crud (RollNo,Name,Class) VALUES ('$RollNo','$Name','$Class')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
    echo"successfully inserted";
    }
    else
    {	
    echo "failed";
	}
?>