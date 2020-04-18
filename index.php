<?php
/*$name="ram";
 $pass=md5($name);
 echo "MD5 :", $pass ,"///////";

 $pass1 = password_hash("ram", PASSWORD_BCRYPT);
 
 echo "Hash :",$pass1;
 
 if (password_verify('Ram', $pass1)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$(function () {
		 $("#plus").click( function(e){
		  $("#name").after('<tr><td><input type="text" name="name[]" id="name" autocomplete="off" placeholder="`enter name`" required></td></tr>');
		 });
		 $("#minus").click(function(e){
          $("#name").remove();  
		 });
		});
	</script>
</head>
<body>
      <div align="center">
      	<h2>`PHP MULTIPLE DATA INSERTION`</h2>
        <form action="insert.php" method="post">
        <table>
        	<tr><th>NAME</th><th><button id="plus">+</button></th><th><button id="minus">-</button></th></tr>
        	<tr><td><input type="text" name="name[]" id="name" autocomplete="off" placeholder="`enter name`" required></td></tr>
        	<tr><td><input type="submit" name="submit"></td></tr>
        </table>
      	</form>
      </div>
</body>
</html>