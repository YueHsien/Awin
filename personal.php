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
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
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
	$sql = "SELECT permission.id,permission.name, users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest FROM permission,users WHERE permission.id=users.id ORDER BY users.id";
		
		$result = mysqli_query ( $link, $sql);
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>名字</th>";
				echo "<th>帳號</th>";
				echo "<th>權限</th>";
				echo "<th>是否可移除</th>";
				echo "<th>是否可查詢admin</th>";
				echo "<th>是否可查詢user</th>";
				echo "<th>是否可查詢guest</th>";
				echo "</thead>";
				echo "<today>";
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
			echo "</tr> ";
			//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."\t".$rows[3]."\t".$rows[4]."\t".$rows[5]."\t".$rows[6]."\t".$rows[7]."\t".$rows[8]."\t".$rows[9]."\t";
			echo "<br>";
		}echo "</today></table><br>";
}
if($permission=="user"){
	echo "<script>alert('您的權限為$permission 以下為您的權限顯示')</script>";
			echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>id</th>";
			echo "<th>名字</th>";
			echo "<th>帳號</th>";
			echo "<th>權限</th>";
			echo "<th>是否可移除</th>";
			echo "<th>是否可查詢admin</th>";
			echo "<th>是否可查詢user</th>";
			echo "<th>是否可查詢guest</th>";
			echo "</thead>";
			echo "<today>";
	$sql = "SELECT permission.id,permission.name, users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest FROM permission,users WHERE permission.position!='admin' AND permission.position!='user' AND permission.id=users.id";
	$result = mysqli_query ( $link, $sql);
	$sql2 = "SELECT permission.id,permission.name, users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest FROM permission,users WHERE permission.id=users.id AND permission.id=$id";
	$result2 = mysqli_query ( $link, $sql2);
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
			echo "</tr> ";
	}
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
			echo "</tr> ";
	}echo "</today></table><br>";
}
if($permission=="guest"){
	echo "<script>alert('您的權限為$permission 以下為您的權限顯示')</script>";
	$sql = "SELECT permission.id,permission.name, users.account,permission.position,permission.remove,permission.queryadmin,permission.queryuser,permission.queryguest FROM permission,users WHERE permission.id=users.id AND permission.id=$id";
		$result = mysqli_query ( $link, $sql);

			echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>id</th>";
			echo "<th>名字</th>";
			echo "<th>帳號</th>";
			echo "<th>權限</th>";
			echo "<th>是否可移除</th>";
			echo "<th>是否可查詢admin</th>";
			echo "<th>是否可查詢user</th>";
			echo "<th>是否可查詢guest</th>";
			echo "</thead>";
			echo "<today>";
		
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
			echo "</tr> ";
}echo "</today></table><br>";
}
?>
<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.30.5/css/theme.blue.min.css"></link>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.30.5/js/jquery.tablesorter.min.js"></script>
<script>

$("#myTable").tablesorter({

theme: "blue",

widgets: ['zebra']

});

</script>
</body>
</html>