<?php
include_once ("./db_connect.php");
if(isset($_POST['searchid']))
{
    $q = $_POST['searchid'];

    $sql="select * from user_table where (user_name like '%$q%' ) or (  user_email like '%$q%')  or (user_nist_id like '%$q%' ) order by user_id LIMIT 5";
//    $sql='select * from user_table where 1=1';
    $result = pg_query($conn,$sql);




    while($row=pg_fetch_array($result)) {
        $username = $row[3];
        $email = $row[5];
        $roll= $row[6];
        $b_username = '<strong>' . $q . '</strong>';
        $b_email = '<strong>' . $q . '</strong>';
        $b_roll='<strong>' . $q . '</strong>';
        $final_username = str_ireplace($q, $b_username, $username);
        $final_email = str_ireplace($q, $b_email, $email);
        $final_nist_id=str_ireplace($q, $b_roll, $roll);
        ?>

        <div class="resultid" align="left">
            <a href="./student_search.php?student=<?php echo $row[3]?>">
                <img src="./../profile/<?php echo $row[12]?>" style="width:50px; height:50px; float:left; margin-right:6px;"/>
                <span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
                <span class="name"><?php echo $final_nist_id; ?></span>
            </a>
        </div>
        <br>

        <?php
    }
}else{
    echo '404';
}

?>

