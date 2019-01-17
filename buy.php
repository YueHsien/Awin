<?php session_start();
if ($_SESSION ["login_session"] != true) {
	header ( "Location:first.php" );
}else{
	$username=$_SESSION ["login_session"];
	$id=$_SESSION["id"];
}

?>
<!DOCTYPE html>

<html>
<head runat="server">
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 50%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
</head>
<body >
<div class="login-page" bgcolor="#FFFFFF">
  <div class="form">
	    <form action="buy2.php" method="post">
            <label font-size="25" height="25px" width="65px">地區:
			<select style="width:100%;" name="Day">
			<option value ="全部" selected="True">全部</option>
			<?php
				require_once ("mycontacts_open.inc");
				$sql = "SELECT DISTINCT `region` FROM `estate2`";
				$result = mysqli_query ( $link, $sql);

				$index=0;

				while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
					echo "<option value='".$rows[0]."'>".$rows[0]."</option>";
				}
			?>
			</select>
			</label>      
            <br />
            <br />
            <label font-size="25">坪數範圍:</label>
			<input type="text" height="30px" width="50px" name="a1">
			<label font-size="25">~</label>
			<input type="text" height="30px" width="50px" name="a2">
			<label font-size="25">每坪金額:</label>
			<input type="text" height="30px" width="50px" name="b1">
			<label font-size="25">~</label>
			<input type="text" height="30px" width="50px" name="b2">
			<div class="g-recaptcha" data-sitekey="6LdL1YgUAAAAANd9UROI4QNXdImOeR_2LiIFcERx"></div>
		            <button type="submit">查詢</button>
					　		
    </form>

  </div>
</div>
</body>
</html>