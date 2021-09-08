<?php
include_once ("./db_connect.php");

if(isset($_POST["add_admin"])) {
        session_start();
        $adminid = $_SESSION["admin_id"];

        echo $adminid . "<--adminid";

    $sql="select admin_name from admin_table where admin_id='$adminid'";
    $result=pg_query($conn,$sql );
    $row=pg_fetch_row($result);
    $master=$row[0];
    $adminid=$_POST["adminid"];
    $sql = "select * from admin_table where admin_id='$adminid'";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_row($result);
    if ($row) {
        $a_name= $_POST['adminname'];
        $a_pass = $_POST['adminpassword'];

        $a_email= $_POST['adminemail'];
        $a_mobile=$_POST['adminmobile'];
        $a_master=$master;
        $sql =" UPDATE admin_table SET admin_name = '$a_name', admin_pass = '$a_pass', admin_email = '$a_email', admin_mobile = '$a_mobile', admin_master = '$master' WHERE admin_table.admin_id = '$adminid'";
        $result = pg_query($conn, $sql);
        if ($result) {
            header("Location: ./show_admin.php?m=edited");
        } else {
            header("Location: ./show_admin.php?m=edit failed");
        }
    } else {
        $a_name= $_POST['adminname'];
        $a_pass = $_POST['adminpassword'];

        $a_email= $_POST['adminemail'];
        $a_mobile = $_POST['adminmobile'];

        $a_master=$master;
        $sql =" INSERT INTO admin_table ( admin_name, admin_pass, admin_email, admin_mobile, admin_master) VALUES ( '$a_name', '$a_pass', '$a_email', '$a_mobile', '$a_master')";
        $result = pg_query($conn, $sql);
        if ($result) {
            header("Location: ./show_admin.php?m=added");
        } else {
            header("Location: ./show_admin.php?m=add failed");
        }

    }

}
echo "<style>.table{width:auto;}</style>";

include_once ("./db_connect.php");
$sql="SELECT * FROM admin_table";
$result=pg_query($conn,$sql );
echo '   <row>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">Admin ID</th>
                    <th>Admin Name</th>
                    <th>Admin Password</th>
                    <th>Admin Email</th>
                    <th>Admin Mobile</th>
                    <th>Admin Master</th>
                </tr>
            </thead><tbody>';


echo '<form name="guide_add" action="add_admin.php" method="post"><tr>';
echo '<td>'.'<input type="number" value="" name="adminid">'. '</td>';
echo '<td>'.'<input type="text" value="" name="adminname">'.'</td>';
echo '<td>'.'<input type="text" value="" name="adminpassword">'.'</td>';

echo '<td>'.'<input type="text" value="" name="adminemail">'. '</td>';
echo '<td>'.'<input type="text" value="" name="adminmobile">'.'</td>';
echo '<td><input type="submit" class="btn btn-info btn-default" value="Add" name="add_admin"></form></td>';



while($row=pg_fetch_row($result)){
    echo '<tr>';
    echo '<td class="col-md-2">'.$row[0].'</td>';
    echo '<td class="col-md-2">'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.$row[3].'</td>';
    echo '<td>'.$row[4].'</td>';
    echo '<td>'.$row[5].'</td>';
    echo '</tr>';
}
echo '</tr> </tbody></table></row>';
?>