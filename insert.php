<!--Created:17/04/2020
    Developed:Netam1010 -->
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
   echo "Inserted";
 
 ?>