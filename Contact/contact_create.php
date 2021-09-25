<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
    </head>

    <body>
        <!-- <a href='index.html'>Home</a> <br> -->
        <?php

            //database connection code
            // $con = mysqli_connect('localhost', 'database_user',
            //    'database_password', 'database');

            if(isset($_POST['Submit'])) {
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

                // if ($rs) {
                //     echo "Contact records inserted.";
                //     // echo '<meta http-equiv="refresh" content="0;url=contact.html">';
                // }
                // else {
                //     echo "Contact not inserted";
                // }
            }

            include("contact_display.php");

        ?>
        <form name="frmContact" method="POST">
            <table border="0">
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
                <tr>
                    <td><label for="Name">Message </label></td>
                    <td><textarea name="txtMessage" id="txtMessage" style="width: 170px;"></textarea></td>
                </tr>
                <tr >
                    <td align = "center" colspan = 2><input type="submit" name="Submit" id="Submit" value="Create"></td>
                </tr>
            </table>  
        </form>
    </body>
</html>

