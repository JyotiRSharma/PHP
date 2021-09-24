<?php

//database connection code
// $con = mysqli_connect('localhost', 'database_user',
//    'database_password', 'database');

$con = mysqli_connect('localhost', 'root', '', 'db_contact');

//get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`) 
VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

//insert the SQL in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact records inserted.";
    echo '<meta http-equiv="refresh" content="0;url=contact.html">';
}
else {
    echo "Contact not inserted";
}

?>
