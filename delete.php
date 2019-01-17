<?php session_start();
if ($_SESSION ["login_session"] != true) {
	header ( "Location:firstpage.php" );
}else{
	$username=$_SESSION ["login_session"];
	$id=$_SESSION["id"];
}
?>
<!DOCTYPE html>

<html>
<head runat="server">

</head>
<body>
<?php 
require_once ("mycontacts_open.inc");
$sql="SELECT * FROM permission where id=".$id;
$result = mysqli_query ( $link, $sql);
while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
	$permission=$rows["1"];
}
if($permission=="admin"){
	echo "<script>alert('您的權限為$permission 可以進行資料刪除')</script>";
	$sql = "SELECT users.id,users.name,users.account,permission.position FROM users,permission WHERE users.id=permission.id AND permission.position!='admin'";
		$result = mysqli_query ( $link, $sql);
		echo "<table align='center' cellpadding='5' cellspacing='1'  >";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>名字</th>";
		echo "<th>帳號</th>";
		echo "<th>權限</th>";
		echo "<th>刪除</th>";
		while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
			echo "<tr>";
			echo "<td><font color='black'>$rows[0]</font></td>";
			echo "<td><font color='black'>$rows[1]</font></td>";
			echo "<td><font color='black'>$rows[2]</font></td>";
			echo "<td><font color='black'>$rows[3]</font></td>";
			echo "<td><strong><a href='delete2.php?id=$rows[0]'>刪除</a></strong></td>";
			echo "</tr> ";
			//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
			echo "<br>";
		}
}
if($permission=="user"){
	echo "<script>alert('您的權限為$permission 您無法進行刪除')</script>";
	header("Refresh: 0; url=mainpage.php"); // 轉址
	
}
if($permission=="guest"){
	echo "<script>alert('您的權限為$permission 您無法進行刪除')</script>";
	header("Refresh: 0; url=mainpage.php"); // 轉址
}
?>
</body>
</html>