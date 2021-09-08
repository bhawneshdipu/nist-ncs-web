<?php include_once ("./php/session_start.php");?>
<?php
include_once 'db_connect.php';
	error_reporting(0);
	$msg = $_POST['userpost'];
	$msg=stripcslashes($msg);
	$msg=strip_tags($msg);
	if($msg) {
		$id = $_SESSION["user_id"];
		$sql = "SELECT `user_name` from user_table where `user_id`='$id'";
		$result = mysqli_query($conn, $sql) or die("Not found");
		$row = mysqli_fetch_row($result);
		$name = $row[0];
		$sql = "INSERT INTO user_timeline (`id`,`sender_name`,`sender_post`,`post_time`) VALUES(NULL,'$name','$msg',now())";
		$data = mysqli_query($conn, $sql);
		if (!$data) {
			header("Location: ./home.php?m=failed");
		} else {
			header('Location:./home.php?m=success');
		}
	}else{
		header('Location:./home.php?m=empty');

	}
?>