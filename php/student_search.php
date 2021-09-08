
<?php
    $id=0;
    if(isset($_POST['student_id'])) {
        $id = $_POST['student_id'];

        include_once("./../db_connect.php");
        $sql = " SELECT * FROM `user_table` WHERE `user_id`='$id'";
        $result = pg_query($conn, $sql);
        $row = pg_fetch_row($result);
        $userid = $id;
        $fname = $row[1];
        $lname = $row[2];
        $user_name = $row[3];
        $user_pass = $row[4];
        $user_email = $row[5];
        $user_nist_id = $row[6];
        $user_pin = $row[7];
        $user_mobile_no = $row[8];
        $user_account_type = $row[9];
        $user_gender = $row[10];
        $user_guide_id = $row[12];

        echo '<row>
        <table class="table table-hover">
        <thead>
            <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>NIST ID</th>
            <th>PIN</th>
            <th>Mobile</th>
            <th>Account</th>
            <th>Gender</th>
            <th>Guide ID</th>
            
            </tr>
        </thead>';
        echo '<tbody>
            <tr>
                <td><input type="text" id="user_id" value="' . $userid . '"</td>
                <td><input type="text" id="user_fname" value="' . $fname . '"</td>
                <td><input type="text" id="user_lname" value="' . $lname . '"</td>
                <td><input type="text" id="user_name" value="' . $user_name . '"</td>
                <td><input type="text" id="user_pass" value="' . $user_pass . '"</td>
                <td><input type="text" id="user_email" value="' . $user_email . '"</td>
                <td><input type="text" id="user_nist_id" value="' . $user_nist_id . '"</td>
                <td><input type="text" id="user_pin" value="' . $user_pin . '"</td>
                <td><input type="text" id="user_mobile_no" value="' . $user_mobile_no . '"</td>
                <td><input type="text" id="user_account_type" value="' . $user_account_type . '"</td>
                <td><input type="text" id="user_gender" value="' . $user_gender . '"</td>
                <td><input type="text" id="user_guide_id" value="' . $user_guide_id . '"</td>
            
                </tr>
                </tbody></table>';
        echo '<input type="submit" value="Save Changes" id="submit" class="btn btn-lg btn-danger">';
}
?>
