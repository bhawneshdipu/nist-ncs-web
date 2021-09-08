<?php


include_once ("./db_connect.php");
    if(isset($_POST["add_guide"])) {
        $guideid = $_POST["guide_id"];
        $sql = "select * from guide_table where guide_id='$guideid'";
        $result = pg_query($conn, $sql);
        $row = pg_fetch_row($result);
        if ($row) {
            $g_teacher = $_POST['guide_teacher'];
            $g_student = $_POST['guide_student'];
            $sql = "UPDATE guide_table SET guide_teacher = '$g_teacher', guide_student = '$g_student' WHERE guide_table.guide_id = '$guideid'";
            $result = pg_query($conn, $sql);
            if ($row) {
                header("Location: ./guide_detail.php?m=edited");
            } else {
                header("Location: ./guide_detail.php?m=edit failed");
            }
        } else {
            $g_teacher = $_POST['guide_teacher'];
            $g_student = $_POST['guide_student'];
            $sql = "INSERT INTO guide_table ( guide_teacher, guide_student) VALUES ('$g_teacher', '$g_student')";
            echo $sql;

            $result = pg_query($conn, $sql);
            $row = pg_num_rows($result);
            echo $result."hello";
            if ($result) {
                header("Location: ./guide_detail.php?m=added");
            } else {
                header("Location: ./guide_detail.php?m=add failed");
            }

        }

    } else if(isset($_POST['delete_guide'])) {
    if(isset($_POST["guide_id"]) and $_POST["guide_id"]>0) {
        $guide_id = $_POST["guide_id"];
        $sql = "delete from guide_table where guide_id='$guide_id'";
        $result = pg_query($conn, $sql);
        $row = pg_fetch_row($result);

            if ($row) {
                header("Location: ./guide_detail.php?m=deleted");
            } else {
                header("Location: ./guide_detail.php?m=delete_failed");
            }

    }
}

include_once ("./db_connect.php");
$sql="SELECT * FROM guide_table ORDER BY guide_id";
$result=pg_query($conn,$sql );
echo '   <row>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Guide ID</th>
                    <th>Teacher</th>
                    <th>Student Guide</th>
                    <th></th>
                </tr>
            </thead><tbody>';
echo '<form name="guide_add" action="guide_detail.php" method="post"><tr>';
echo '<td>'.'<input type="number" value="" name="guide_id">'. '</td>';
echo '<td>'.'<input type="text" value="" name="guide_teacher">'.'</td>';
echo '<td>'.'<input type="text" value="" name="guide_student">'.'</td>';
echo '<td><input type="submit" value="Add" name="add_guide"><input type="submit" value="Delete" name="delete_guide"></td>';


while($row=pg_fetch_row($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td></td>';
    echo '</tr>';
}
echo '</tr> </tbody></table></row></form>';

?>