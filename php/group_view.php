<?php

if($user_priority!=9) {
    echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Mentor</b></div>
        <div class="panel-body">';
    $sql = 'select * from user_table where guide_id=0';
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_row($result)) {
        $fname = $row[1];
        $lname = $row[2];
        $name = $row[3];
        $email = $row[5];
        $pic = $row[12];


        echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
        echo './profile/' . $pic;
        echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
        echo $fname . " " . $lname;
        echo '</div>
                  </div></a>';
    }


    echo '</div>
    </div>';


    echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Teacher </b></div>
        <div class="panel-body">';
    $sql = "select * from user_table where user_priority=6 and guide_id='$guideid'";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_row($result)) {
        $fname = $row[1];
        $lname = $row[2];
        $name = $row[3];
        $email = $row[5];
        $pic = $row[12];


        echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
        echo './profile/' . $pic;
        echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
        echo $fname . " " . $lname;
        echo '</div>
                  </div></a>';
    }


    echo '</div>
    </div>';


    echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Student Guide</b></div>
        <div class="panel-body">';
    $sql = "select * from user_table where user_priority=3 and guide_id='$guideid'";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_row($result)) {
        $fname = $row[1];
        $lname = $row[2];
        $name = $row[3];
        $email = $row[5];
        $pic = $row[12];


        echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
        echo './profile/' . $pic;
        echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
        echo $fname . " " . $lname;
        echo '</div>
                  </div></a>';
    }


    echo '</div>
    </div>';


    echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Student</b></div>
        <div class="panel-body">';
    $sql = "select * from user_table where user_priority=1 and guide_id='$guideid'";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_row($result)) {
        $fname = $row[1];
        $lname = $row[2];
        $name = $row[3];
        $email = $row[5];
        $pic = $row[12];


        echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
        echo './profile/' . $pic;
        echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
        echo $fname . " " . $lname;
        echo '</div>
                  </div></a>';
    }


    echo '</div>
    </div>';
}
else {


    $sqlout = 'select DISTINCT guide_id from user_table ORDER BY guide_id';
    $resultout = pg_query($conn, $sqlout);
    while ($rowout = pg_fetch_row($resultout) ) {
        if($rowout[0]!=0){
        //echo $rowout[0];
        echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Mentor</b><b class="pull-right">Group '.$rowout[0].'</b></div>
        <div class="panel-body">';
        $sql = 'select * from user_table where guide_id=0';
        $result = pg_query($conn, $sql);
        while ($row = pg_fetch_row($result)) {
            $fname = $row[1];
            $lname = $row[2];
            $name = $row[3];
            $email = $row[5];
            $pic = $row[12];


            echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
            echo './profile/' . $pic;
            echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
            echo $fname . " " . $lname;
            echo '</div>
                  </div></a>';
        }


        echo '</div>
    </div>';


        echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Teacher </b><b class="pull-right">Group '.$rowout[0].'</b></div>
        <div class="panel-body">';
        $sql = "select * from user_table where user_priority=6 and guide_id='$rowout[0]'";
        $result = pg_query($conn, $sql);
        //echo $sql;
        while ($row = pg_fetch_row($result)) {
            $fname = $row[1];
            $lname = $row[2];
            $name = $row[3];
            $email = $row[5];
            $pic = $row[12];


            echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
            echo './profile/' . $pic;
            echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
            echo $fname . " " . $lname;
            echo '</div>
                  </div></a>';
        }


        echo '</div>
    </div>';


        echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Student Guide</b><b class="pull-right">Group '.$rowout[0].'</b></div>
        <div class="panel-body">';
        $sql = "select * from user_table where user_priority=3 and guide_id='$rowout[0]'";
        $result = pg_query($conn, $sql);
        //echo $sql;
        while ($row = pg_fetch_row($result)) {
            $fname = $row[1];
            $lname = $row[2];
            $name = $row[3];
            $email = $row[5];
            $pic = $row[12];


            echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
            echo './profile/' . $pic;
            echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
            echo $fname . " " . $lname;
            echo '</div>
                  </div></a>';
        }


        echo '</div>
    </div>';


        echo '<div class="panel panel-default">
        <div class="panel-heading"><b>Student</b><b class="pull-right">Group '.$rowout[0].'</b></div>
        <div class="panel-body">';
        $sql = "select * from user_table where user_priority=1 and guide_id='$rowout[0]'";
        $result = pg_query($conn, $sql);
        //echo $sql;
        while ($row = pg_fetch_row($result)) {
            $fname = $row[1];
            $lname = $row[2];
            $name = $row[3];
            $email = $row[5];
            $pic = $row[12];


            echo '<a href="./profile.php?p=' . $name . '"><div class="panel panel-default col-xs-3">
                    <div class="panel-body">
                                <img src="';
            echo './profile/' . $pic;
            echo '" class="img img-circle col-xs-12" width="200px" height="250px">
                            </div>
                    <div class="panel-footer col-xs-12">';
            echo $fname . " " . $lname;
            echo '</div>
                  </div></a>';
        }


        echo '</div>
    </div>';
    }
    }
}
?>
