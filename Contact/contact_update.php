<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
</head>
<body>
    <?php
		
		if(isset($_POST['Submit'])) {
			$id = $_POST['del_id'];
            $txtName = $_POST['txtName'];
            $txtEmail = $_POST['txtEmail'];
            $txtPhone = $_POST['txtPhone'];

			$con = mysqli_connect('localhost', 'root', '', 'db_contact');
			$sql = "UPDATE `tbl_contact` SET `fldName` = '$txtName', `fldEmail` = '$txtEmail', `fldPhone` = '$txtPhone' WHERE `tbl_contact`.`id` = '$id'";

			$rs = mysqli_query($con, $sql);

		}
		include("contact_display.php");

	?>
	
    <form method="POST">
            <table border="0">
                <tr>
                    <td><label>Id </label></td>
		            <td><input type="text" name="del_id" /></td>
                </tr>
                <tr>
                    <td><label for="Name">Name </label></td>
                    <td><input type="text" name="txtName" id="txtName"></td>
                </tr>
                <tr>
                    <td><label for="Email">Email </label></td>
                    <td><input type="text" name="txtEmail" id="txtEmail"></td>
                </tr>
                <tr>
                    <td><label for="Name">Phone </label></td>
                    <td><input type="text" name="txtPhone" id="txtPhone"></td>
                </tr>
                <tr >
                    <td align = "center" colspan = 2><input type="submit" name="Submit" id="Submit" value="Update"></td>
                </tr>
            </table>  
        </form>
    
</body>
</html>