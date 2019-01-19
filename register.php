<!DOCTYPE html>


<head>
<style type="text/css">

</style>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body bgcolor="#FFFFBB">
	<div align="center">
		<font Size="8" color="#FF0000">請註冊會員</font>
	</div>

	<br>
	<form action="register.php" method="post">
		<div align="center"  >
            <div style="width: 600px" style="background-color:white">
            <font Size="10" color="#FF0000">*</font><font Size="5"
				color="#000000">姓名:</font>
				<input type="name"
				name="name" size="20" maxlength="20" style="height: 15px; width: 175px;" />
				<br>
			<font Size="10" color="#FF0000">*</font><font Size="5"
				color="#000000">帳號:</font> <input type="text" name="account"
				size="20" maxlength="10" style="height: 15px; width: 175px;" /> <br> <font Size="10" color="#FF0000">*</font>
			<font Size="5" color="#000000">密碼:</font> <input type="password"
				name="password" size="20" maxlength="20" style="height: 15px; width: 175px;" /> <br><br><br> <font Size="10"
				color="#FF0000">*</font> <font Size="5" color="#000000" >職位:</font>
				<select
					name="Class" style="font-size: 20px">
					<option value="admin" selected="True">admin</option>
					<option value="user" selected="True">user</option>
					<option value="guest" selected="True">guest</option>
				</select>
            <br />
            <br />
        </div>
		</div>
		<div align="center" style="margin-top:0%;">
			<input type="submit" value="送出"
				style="width: 120px; height: 40px; font-size: 20px;" align="center">
            <br />
	
		</div>
	</form>
<?php
$index = false;
if (isset ( $_POST ["account"] ) && isset ( $_POST ["password"] ) && isset ( $_POST ["Class"] )) {
	$account = $_POST ["account"];
	$password = $_POST ["password"];
	$address=$_POST["Class"];
	$name=$_POST["name"];
	// 檢查是否有輸入欄位資料
	$index=0;
	$a=0;//數字
	$b=0;//英文
	$c=0;//特殊字元
	if(strlen($password)>=8&&strlen($password)<=20&&$account!=""&&$password!=""&&$address!=""&&$name!=""){
		for($i=0;$i<strlen($password);$i++){
			$index=ord(substr($password,$i,1));
			if($index>=48&&$index<=57){
				$a++;
			}else if($index>=65&&$index<=90||$index>=97&&$index<=122){
				$b++;
			}else{
				$c++;
			}
			
		}
		if($a>=1&&$b>=1&&$c>=1){
			$link = mysqli_connect ( "yuehsienmysql-mysqldbserver.mysql.database.azure.com", "sqladmin@yuehsienmysql-mysqldbserver", "Cd717630", "awin" ) or die ( "無法開啟MySQL資料庫連接!<br/>" );
			$sql = "SELECT * FROM users";
			$result = mysqli_query ( $link, $sql );
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					if ($row ["account"] == $account) {
						echo "<font Size='5' color='#FF0000'>這個帳號有人使用了，請重新申請!!</font>";
						echo "<script>alert('這個帳號有人使用了，請重新申請!!');</script>";
						break;
					}
					else{
						$sql = "INSERT INTO users (name,account,password) values('" . $name . "','" . $account . "','" . $password . "')";
						if (mysqli_query ( $link, $sql )) { // 執行SQL指令
						}
						if($address=="admin"){
						$sql = "INSERT INTO permission (position,name,remove,queryadmin,queryuser,queryguest) values('" .$address. "','" .$name. "','Yes','Yes','Yes','Yes')";
						if (mysqli_query ( $link, $sql )) { // 執行SQL指令
						}
							echo $sql;
							echo "<script>alert('註冊成功!');</script>";
						break;
						}
						if($address=="user"){
						$sql = "INSERT INTO permission (position,name,remove,queryadmin,queryuser,queryguest) values('" .$address. "','" .$name. "','No','No','No','Yes')";
						if (mysqli_query ( $link, $sql )) { // 執行SQL指令
						}
							echo $sql;
							echo "<script>alert('註冊成功!');</script>";
							header("Refresh:0;url=first.php");
						break;
						}
						if($address=="guest"){
							$sql = "INSERT INTO permission (position,name,remove,queryadmin,queryuser,queryguest) values('" .$address. "','" .$name. "','No','No','No','No')";
							if (mysqli_query ( $link, $sql )) { // 執行SQL指令
							}
							echo $sql;
							echo "<script>alert('註冊成功!');</script>";
							header("Refresh:0;url=first.php");
						break;
						}
				}
				}
			//header("Refresh:2;url=register.php");
		}else{
			echo "<script>alert('請確認是否有1數字1英文1特殊字元!!!');</script>";
			header("Refresh:2;url=register.php");
		}
	}else{
		echo "<script>alert('請確認資料完整或密碼長度!!');</script>";
		header("Refresh:2;url=register.php");
	}
}
?>
	<script>
	
	</script>
</body>