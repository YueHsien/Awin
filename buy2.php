<?php session_start();
if ($_SESSION ["login_session"] != true) {
	header ( "Location:first.php" );
}else{
	$username=$_SESSION ["login_session"];
	$id=$_SESSION["id"];
}
require_once ("mycontacts_open.inc");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
<title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>

</head>
<body>
<?php
	
	if ($_POST["Day"]=="全部") {
		if($_POST["a1"]!=""&&$_POST["a2"]!=""){
			if($_POST["b1"]!=""&&$_POST["b2"]!=""){
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE area BETWEEN $a1 AND $a2 AND  areasum BETWEEN $b1 AND $b2  \n"
				. "ORDER BY `estate2`.`area`  DESC";

				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}else{
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE area BETWEEN $a1 AND $a2";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}
		}else{
			if($_POST["b1"]!=""&&$_POST["b2"]!=""){
				$day=$_POST["Day"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE areasum BETWEEN $b1 AND $b2";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}else{
				$day=$_POST["Day"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2`";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}
		}
	}else{
		if($_POST["a1"]!=""&&$_POST["a2"]!=""){
			if($_POST["b1"]!=""&&$_POST["b2"]!=""){
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE area BETWEEN $a1 AND $a2 AND areasum BETWEEN $b1 AND $b2 AND region='$day'";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}else{
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE area BETWEEN $a1 AND $a2 ";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}
		}else{
			if($_POST["b1"]!=""&&$_POST["b2"]!=""){
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE area BETWEEN $b1 AND $b2 AND region='$day'";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}else{
				$day=$_POST["Day"];
				$a1=$_POST["a1"];
				$a2=$_POST["a2"];
				$b1=$_POST["b1"];
				$b2=$_POST["b2"];
				$sql = "SELECT `id`, `region`, `goal`, `position`, `area`, `sum`, `areasum` FROM `estate2` WHERE region='$day' ";
				echo "<table align='center' cellpadding='5' cellspacing='1' id='myTable' class='tablesorter'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>地區</th>";
				echo "<th>用途</th>";
				echo "<th>地址</th>";
				echo "<th>總面積</th>";
				echo "<th>總金額</th>";
				echo "<th>每坪方面基金額</th>";
				echo "</thead>";
				echo "<today>";
				$result = mysqli_query ( $link, $sql);
				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<tr>";
					echo "<td><font color='black'>$rows[0]</font></td>";
					echo "<td><font color='black'>$rows[1]</font></td>";
					echo "<td><font color='black'>$rows[2]</font></td>";
					echo "<td><font color='black'>$rows[3]</font></td>";
					echo "<td><font color='black'>$rows[4]</font></td>";
					echo "<td><font color='black'>$rows[5]</font></td>";
					echo "<td><font color='black'>$rows[6]</font></td>";
					echo "</tr> ";
				}
				echo "</today></table><br>";
			}
		}
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