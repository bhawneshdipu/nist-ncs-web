<?php
include_once ("./db_connect.php");

if(isset($_POST["add_thought"])) {
        $t= $_POST['thought'];
        $t_author = $_POST['thought_author'];
        $sql =" INSERT INTO thought_table ( thought_msg, thought_author) VALUES ( '$t', '$t_author')";
        $result = pg_query($conn, $sql);
        echo $sql ;
        if ($result) {
            header("Location: ./thoughts.php?m=added");
        } else {
            header("Location: ./thoughts.php?m=add failed");
        }
}else if(isset($_POST['delete_thought'])){
    $tid=$_POST['thought_id'];
    $sql="DELETE FROM thought_table where thought_id='$tid';";
    $result = pg_query($conn, $sql);
    if ($result) {
        header("Location: ./thoughts.php?m=deleted");
    } else {
        header("Location: ./thoughts.php?m=delete failed");
    }

}


echo "<style>.table{width:auto;}</style>";

include_once ("./db_connect.php");
$sql="SELECT * FROM thought_table";
$result=pg_query($conn,$sql );
echo '   <row>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">Thought ID</th>
                    <th class="col-lg-5">Thought </th>
                    <th class="col-lg-1">Thought Author</th>
                    <th class="col-lg-2"></th>
                </tr>
            </thead><tbody>';

        echo '<form name="thought_add" action="add_thought.php" method="post"><tr>';
        echo '<td>'.'<input type="number" value="" name="thought_id">'. '</td>';
        echo '<td>'.'<textarea row="2" class="col-lg-11" value="" name="thought">'.'</textarea></td>';
        echo '<td>'.'<input type="text" value="" name="thought_author">'.'</td>';
        echo '<td>'.'<input type="submit" class="btn btn-info btn-default" value="Add" name="add_thought"><input type="submit" class="btn btn-info btn-default" value="Delete" name="delete_thought">'.'</td>';
        echo '</tr> </row></form>';

while($row=pg_fetch_row($result)){
    echo '<tr>';
    echo '<td class="col-md-2">'.$row[0].'</td>';
    echo '<td class="col-md-2">'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td></td>';
    echo '</tr>';

}
echo '</tbody></table>';

?>