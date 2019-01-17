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
	echo "<script>alert('您的權限為$permission 以下為您的權限顯示')</script>";
	$sql = "SELECT estate.id,estate.name,estate.region,estate.money,users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest\n"
		. "FROM estate,users,permission\n"
		. "WHERE estate.id=users.id AND estate.id=permission.id ORDER BY permission.position";
		$result = mysqli_query ( $link, $sql);
		echo "<table align='center' cellpadding='5' cellspacing='1'  >";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>名字</th>";
		echo "<th>房地產區域</th>";
		echo "<th>房地產金額</th>";
		echo "<th>帳號</th>";
		echo "<th>權限</th>";
		echo "<th>是否可移除</th>";
		echo "<th>是否可查詢admin</th>";
		echo "<th>是否可查詢user</th>";
		echo "<th>是否可查詢guest</th>";
		while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
			echo "<tr>";
			echo "<td><font color='black'>$rows[0]</font></td>";
			echo "<td><font color='black'>$rows[1]</font></td>";
			echo "<td><font color='black'>$rows[2]</font></td>";
			echo "<td><font color='black'>$rows[3]</font></td>";
			echo "<td><font color='black'>$rows[4]</font></td>";
			echo "<td><font color='black'>$rows[5]</font></td>";
			echo "<td><font color='black'>$rows[6]</font></td>";
			echo "<td><font color='black'>$rows[7]</font></td>";
			echo "<td><font color='black'>$rows[8]</font></td>";
			echo "<td><font color='black'>$rows[9]</font></td>";
			echo "</tr> ";
			//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
			echo "<br>";
		}
}
if($permission=="user"){
	echo "<script>alert('您的權限為$permission 以下為您的權限顯示')</script>";
	$sql = "SELECT estate.id,estate.name,estate.region,estate.money,users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest\n"
					. "FROM estate,users,permission\n"
		. "WHERE estate.id=users.id AND estate.id=permission.id AND permission.position!='admin' AND permission.position!='user'";
	$result = mysqli_query ( $link, $sql);
	echo "<table align='center' cellpadding='5' cellspacing='1'  >";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>名字</th>";
	echo "<th>房地產區域</th>";
	echo "<th>房地產金額</th>";
	echo "<th>帳號</th>";
	echo "<th>權限</th>";
	echo "<th>是否可移除</th>";
	echo "<th>是否可查詢admin</th>";
	echo "<th>是否可查詢user</th>";
	echo "<th>是否可查詢guest</th>";
	$sql2 = "SELECT estate.id,estate.name,estate.region,estate.money,users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest\n"
			. "FROM estate,users,permission\n"
			. "WHERE estate.id=users.id AND estate.id=permission.id AND estate.id=$id";
			$result2 = mysqli_query ( $link, $sql2);
			while ( $rows = mysqli_fetch_array ( $result2, MYSQLI_NUM )) {
				echo "<tr>";
				echo "<td><font color='black'>$rows[0]</font></td>";
				echo "<td><font color='black'>$rows[1]</font></td>";
				echo "<td><font color='black'>$rows[2]</font></td>";
				echo "<td><font color='black'>$rows[3]</font></td>";
				echo "<td><font color='black'>$rows[4]</font></td>";
				echo "<td><font color='black'>$rows[5]</font></td>";
				echo "<td><font color='black'>$rows[6]</font></td>";
				echo "<td><font color='black'>$rows[7]</font></td>";
				echo "<td><font color='black'>$rows[8]</font></td>";
				echo "<td><font color='black'>$rows[9]</font></td>";
				echo "</tr> ";
				//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
				echo "<br>";
			}
	while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
		echo "<tr>";
		echo "<td><font color='black'>$rows[0]</font></td>";
		echo "<td><font color='black'>$rows[1]</font></td>";
		echo "<td><font color='black'>$rows[2]</font></td>";
		echo "<td><font color='black'>$rows[3]</font></td>";
		echo "<td><font color='black'>$rows[4]</font></td>";
		echo "<td><font color='black'>$rows[5]</font></td>";
		echo "<td><font color='black'>$rows[6]</font></td>";
		echo "<td><font color='black'>$rows[7]</font></td>";
		echo "<td><font color='black'>$rows[8]</font></td>";
		echo "<td><font color='black'>$rows[9]</font></td>";
		echo "</tr> ";
		//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
		echo "<br>";
	}
}
if($permission=="guest"){
	echo "<script>alert('您的權限為$permission 以下為您的權限顯示')</script>";
	$sql = "SELECT estate.id,estate.name,estate.region,estate.money,users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest\n"
				. "FROM estate,users,permission\n"
		. "WHERE estate.id=users.id AND estate.id=permission.id AND estate.id=$id";
		$result = mysqli_query ( $link, $sql);
		echo "<table align='center' cellpadding='5' cellspacing='1'  >";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>名字</th>";
		echo "<th>房地產區域</th>";
		echo "<th>房地產金額</th>";
		echo "<th>帳號</th>";
		echo "<th>權限</th>";
		echo "<th>是否可移除</th>";
		echo "<th>是否可查詢admin</th>";
		echo "<th>是否可查詢user</th>";
		echo "<th>是否可查詢guest</th>";
		
		while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
			echo "<tr>";
			echo "<td><font color='black'>$rows[0]</font></td>";
			echo "<td><font color='black'>$rows[1]</font></td>";
			echo "<td><font color='black'>$rows[2]</font></td>";
			echo "<td><font color='black'>$rows[3]</font></td>";
			echo "<td><font color='black'>$rows[4]</font></td>";
			echo "<td><font color='black'>$rows[5]</font></td>";
			echo "<td><font color='black'>$rows[6]</font></td>";
			echo "<td><font color='black'>$rows[7]</font></td>";
			echo "<td><font color='black'>$rows[8]</font></td>";
			echo "<td><font color='black'>$rows[9]</font></td>";
			echo "</tr> ";
			//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
			echo "<br>";
}
}
?>
</body>
</html>