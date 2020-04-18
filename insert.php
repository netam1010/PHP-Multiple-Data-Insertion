<?php 
$conn = mysqli_connect("localhost","root", "", "loop_test");
$name = $_POST['name'];
$no   = sizeof($name);
for ($i=0; $i < $no ; $i++){ 
	
	$insertname = $name[$i];
    //echo $insertname;
    $sql = "INSERT INTO test (name)
VALUES ('$insertname')";
mysqli_query($conn, $sql);

}
 /*  if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} */

 
 ?>