<?php session_start();
if ($_SESSION ["login_session"] != true) {
	header ( "Location:first.php" );
}
?>
<?php
if(isset($_GET["id"])){
	$id=$_GET["id"];
	echo "成功刪除資料!即將轉回編輯首頁!";
	require_once ("mycontacts_open.inc");
	$sql = "DELETE FROM users WHERE id=" . $id;
	mysqli_query ( $link, $sql ); // 執行SQL指令
	$sql = "DELETE FROM permission WHERE id=" . $id;
	mysqli_query ( $link, $sql ); // 執行SQL指令
	header("Refresh: 2; url=mainpage.php"); // 轉址
}else{
	
}
?>
