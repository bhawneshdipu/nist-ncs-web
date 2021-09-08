<?php
            include_once ("./../db_connect.php");
            error_reporting(E_ALL);
            ini_set("display_errors",1);
            $sql='select `guide_id`,`guide_teacher`,`guide_student` from `guide_table` WHERE 1 ';
            $result=pg_query($conn,$sql);
            if(!$result){
                echo pg_errormessage($conn);
            }
            while($row=pg_fetch_row($result)) {
                $guide_id = $row[0];
                $guide_teacher = $row[1];
                $guide_student = $row[2];
                //echo $guide_id.$guide_student.$guide_teacher;
                $str1 = '<option value="';
                $guide_id;
                $str2='" class="text-capitalize " id="';
                $guide_id;
                $str3='">';
                echo $str1 .$guide_id .$str2.$guide_id.$str3.$guide_id.". ".$guide_teacher . " ( " . $guide_student ." ) "."</option>";

            }
?>