<?php
include_once ("./db_connect.php");
if(isset($_POST["add_album"])) {
    $album_id = $_POST["album_id"];
    $sql = "select * from album_table where album_id='$album_id'";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_row($result);
    if ($row) {
        $a_name = $_POST['album_name'];

        $sql = "UPDATE album_table SET album_name = '$a_name', album_time = now() WHERE album_table.album_id = '$album_id'";
        $result = pg_query($conn, $sql);
        if ($row) {
            header("Location: ./album.php?m=edited");
        } else {
            header("Location: ./album.php?m=edit failed");
        }
    } else {
        $a_name = $_POST['album_name'];
        $sql = "INSERT INTO album_table ( album_name,album_time) VALUES ('$a_name', now())";
        echo $sql;

        $result = pg_query($conn, $sql);
        $row = pg_num_rows($result);
        echo $result."hello";
        echo headers_sent();
        if ($result) {
            header("Location: ./album.php?m=added");
        } else {
            header("Location: ./album.php?m=add failed");
        }

    }

}else if(isset($_POST['delete_album'])) {
    if(isset($_POST["album_id"]) and $_POST["album_id"]>0) {
        $album_id = $_POST["album_id"];
        $sql = "delete from album_table where album_id='$album_id'";
        $result = pg_query($conn, $sql);
        $row = pg_fetch_row($result);
            if ($row) {
                header("Location: ./album.php?m=deleted");
            } else {
                header("Location: ./album.php?m=delete_failed");
            }

    }
}

include_once ("./db_connect.php");
$sql="SELECT * FROM album_table ORDER BY album_id";
$result=pg_query($conn,$sql );
echo '   <row>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Album ID</th>
                    <th>Album_name</th>
                    <th>Album_time</th>
        
                </tr>
            </thead><tbody>';
while($row=pg_fetch_row($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td></td>';
    echo '</tr>';
}
date_default_timezone_set('Asia/Kolkata');
echo '<form name="album_add" action="album.php" method="post"><tr>';
echo '<td>'.'<input type="number"  class=" form-control" value="" name="album_id">'. '</td>';
echo '<td>'.'<input type="text" class=" form-control"  value="" name="album_name">'.'</td>';
echo '<td>'.'<input type="text" class=" form-control"  value="'.date('Y-m-d').'" name="album_time">'.'</td>';
echo '<td><input type="submit"  value="Add" name="add_album"><input type="submit" value="Delete" name="delete_album"></td>';

echo '</tr> </tbody></table></row></form>';

?>