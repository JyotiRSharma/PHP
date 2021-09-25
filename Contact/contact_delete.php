<!DOCTYPE html>
<html>
<head>
	<title>Delete Contacts</title>
</head>
<body>
	<?php
		
		if(isset($_POST['Submit'])) {
			$id = $_POST['del_id'];

			$con = mysqli_connect('localhost', 'root', '', 'db_contact');
			$sql = "DELETE FROM `tbl_contact` WHERE `tbl_contact`.`id` = '$id';";

			$rs = mysqli_query($con, $sql);

		}
		include("contact_display.php");

	?>
	
	<form method="POST">

		<label>Enter id to delete: </label>
		<input type="text" name="del_id" /> <br>

		<input type="submit" name="Submit" value="Delete" />

	</form>

</body>
</html>