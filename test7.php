<?php
session_start();
 

// grab recaptcha library

require_once "recaptchalib.php";

$secret = "6LdL1YgUAAAAAKD9XTMUBveTITAk-fdLgCMFBswC";

 

// empty response

$response = null;

 

// check secret key

$reCaptcha = new ReCaptcha($secret);
 if ($_POST["g-recaptcha-response"]) {

    $response = $reCaptcha->verifyResponse(

        $_SERVER["REMOTE_ADDR"],

        $_POST["g-recaptcha-response"]

    );

}

?>
<?php

if ($response != null && $response->success) {
	$username = "";  $password = "";
// 取得表單欄位值
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL的資料庫連接 
   $link = mysqli_connect("localhost","root",
                          "","awin")
        or die("無法開啟MySQL資料庫連接!<br/>");
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   // 建立SQL指令字串
   $sql = "SELECT * FROM users WHERE account='";
   $sql.= $username."' AND password='".$password."'";
   // 執行SQL查詢
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);
   // 是否有查詢到使用者記錄
   //echo "<script>alert('$total_records')</script>";
   if ( $total_records > 0 ) {
      // 成功登入, 指定Session變數
   	$sql="SELECT * FROM users";
   	if($result=mysqli_query($link, $sql)){
   		while ($row=mysqli_fetch_assoc($result)){
   			if($row["account"]==$username&&$row["password"]==$password){
   				$_SESSION["login_session"] = true;
   				$_SESSION["login_session"] =$row["name"];
   				$_SESSION["id"]=$row["id"];
   				header("Refresh: 0;url=mainpage.php");
   			}
   		}
   	}
   } else {  // 登入失敗
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["login_session"] = false;
   }
   mysqli_close($link);  // 關閉資料庫連接  
}
  } else {
	echo "<script>alert('Captcha Validation Required!')</script>";
	header("Refresh: 0;url=test6.php");
?>
<?php } ?>