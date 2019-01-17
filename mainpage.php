<?php session_start(); 
if ($_SESSION ["login_session"] != true) {
	header ( "Location:first.php" );
}else{
	$username=$_SESSION ["login_session"];
	$id=$_SESSION["id"];
}
require_once ("mycontacts_open.inc");
$sql="SELECT * FROM permission where id=".$id;
$result = mysqli_query ( $link, $sql);
while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
	$permission=$rows["1"];
}
?>
<!DOCTYPE html>

<html style="height: 100%;">
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
  float:left;
  margin: 0 auto 10px;
  padding: 45px;
  text-align: left;
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
  width: 100%;
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
.top_topmenu {

	background-attachment: scroll;

	background-image:

		url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgICggICAgIBwgHCAoHBwcHBw8ICQcKIBEWFhYRHxMYHSggGBolJxMTITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0QDysZFRkrKy0rKy0tLSsrKysrKy0rKysrKystKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAMkA+wMBIgACEQEDEQH/xAAaAAEBAQADAQAAAAAAAAAAAAAAAQIDBAUG/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERAnFB/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQG/8QAFhEBAQEAAAAAAAAAAAAAAAAAAAER/9oADAMBAAIRAxEAPwD68B8W+rAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARYiigAgAAAAAAAAAAAAAAAAAAAAAAAAAAADJCGCtQTV0QDQAAAAAAAAAAAAAAAAAAAAAAAAAAGYrOpo02MasojSxIsAAEAAAAAAAAAAAAAAAAAAAAAAAAcWqzFGlWIBjUrWsRoRdNZWAoAgAAAAAAAAAAAAAAAAAAAAADglXWfCazHXG9ImrGkWNsRq0ZFiasoihpogGgAAAAAAAAAAAAAAAAAAAAOtKusjOu2NwRWka1dYURpYy1yM1RQBUaolQAQAAAAAAAAAAAAAAAAAB1JRlZWI7t6srKxYjUVmVWkaWMxVxG9hsZEZajWsRRGhARQFAAABAAAAAAAAAAAAB0GozF1zemtyqxrUpNRZWpWNaistaag0jerGVisquoCNSrGY1KIoaaqAaaAGgACAAAAAAAAAADz+VYlxZXKPXY3GozKq6w0rKymo1FZGtRuKxrWkqY1FY1qVpmxoQEXWtcawGwgqCxFgACIAAAAAAAAAA8yLGVcXtb1dY1ZRnG1lY1ZVZb01lVTGmpWVVGljKrKy3pqDTOKsTQMblXWIuqlaVJ8BFEAUBEAAAAAAAAeWJFcI9wqKRFjXLMa5aZqtMqMrK0w2RFJUWKjcEixuMjUZWKiioM1qVpmNKgACgIAAgAAAAAD/2Q==');

	background-repeat: repeat-x;

	background-position: left top;

	height: 50px;

	width: auto;

}



.top_topmenu_frame {

	width: 986px;

	height: auto;

	margin-top: 0px;

	margin-right: auto;

	margin-bottom: 0px;

	margin-left: auto;

}



.newindex_menuitem {

	padding: 0px 10px 0px 10px;

}



.newindex_menuitem2 {

	padding: 0px 10px 0px 100px;

}



.float_left {

	float: left;

}



.newindex_menu_line {

	width: 1px;

	height: 50px;

	background:

		url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAQMAwgMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQIH/8QAGhABAQEAAwEAAAAAAAAAAAAAAAERUWHwIf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDuAABqoCooAIoIKgKAAIAaAAAAKgAAFCgIACqIBQAURQBFAABFAAAEBQQCgqACpoAAWAAAKysAIACgAFAAAAARUUEVAAACKgACgiooJgb0AQIoIACgAiooAAAAIoAIoCAUAFBAxQQFBAACEoCooCCoBFRQAAAAEUABAFEBRFABABQEz2oYAsABUCAQUAABFAARQEUAAAAAAAAAQUEBQRUgAKACKAIoAAAAAACKAAAAACKCCgIIAoACooAAAAAAAAAAAAAICgAigAAAIoIGFBRAFAAAAAAAAAAAAAAAAAAAAABIUAFQBQAAAAAAAAAAAAAAAAABFBAAAUEVAFAAAAAAAAAAAAAAAAAABAAAAAAUARQAAAAAAAAAAAAAAAAAABMUEVNUBAAVFAAAAAAAAAAAAAAABAURQTQAAUAAEVABQAAARQAAEUARUUAAAABFAQUBAIAqKAAAAAIoAAAAAigAAAAAACKAIACVQNAoAAAKAIoAAJVAAAEVCgqKACAKhADBPqA0QAE5AFigCKAFAAAAAAiACgAigBQAQAE0AH//2Q==)

		no-repeat;

	display: block;

}



.top_language {

	color: #FFF;

	padding-top: 10px;

	padding-right: 5px;

}



.float_right {

	float: right;

}



.bg2 {

	width: 80%;

	height: 700px;

	background-image:

		url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ8b43qCEo_JaDjxnI5T9g-NrKv1yOp2KwEe03UMojQydTZEAX7XQ');

	background-repeat: no-repeat;

	border: 1px #ccc solid;

	background-size: cover;

}



.bg3 {

	width: 20%;

	height: 700px;

	background-repeat: no-repeat;

	border: 1px #ccc solid;

	background-size: cover;

	float: right

}
</style>
</head>
<body style="height: 100%;">
	 <div class="top_topmenu" width="100%" height="1000pt">

		<div class="top_topmenu_frame">
		<div class="float_right top_language">
		<img src="http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeiconen1cvjj2rje.png" alt="Smiley face" height="30px" width="30px">
		<a href="logout.php" style="text-decoration:none;"><font size="5.5" color="#000000">登出</font></a>	
		</img>
					
		</div>
		</div>

	</div>
	  <div class="form" style="height:100%;">
	  <div>
	  <img src="https://www.usbuyship.com/wp-content/uploads/2017/09/search.png" alt="Smiley face" height="50px" width="50px">
	  <a href="buy.php" style="text-decoration:none;"><font size="5.5" color="#007799">房地產資料查詢</font></a>
	  </img>
	  </div>
	  <br>
	  <div>
	  <img src="https://cdn4.iconfinder.com/data/icons/mosaicon-05/512/user-512.png" alt="Smiley face" height="50px" width="50px">
	  <a href="personal.php" style="text-decoration:none;"><font size="5.5" color="#007799">觀看他人資料(依權限調整)</font></a>
	  </img>
	  </div>
	  <br>
	  <div>
	  <img src="https://cdn4.iconfinder.com/data/icons/colicon/24/close_delete-512.png" alt="Smiley face" height="50px" width="50px">
	  <a href="delete.php" style="text-decoration:none;"><font size="5.5" color="#007799">刪除他人資料</font></a>
	  </img>
	  </div>
	  <br>
	  <div>
	  <img src="http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeiconjx4a5t0xtwp.png" alt="Smiley face" height="50px" width="50px">
	  <a href="test.php" style="text-decoration:none;"><font size="5.5" color="#007799">圖形化觀察</font></a>
	  </img>
	  </div>
	  
	  </div>
	  <div style="height:5%; background-color:red">
	  歡迎查詢高雄房地產資訊，本網站提供各地區房地產詳細資訊!
      </div>
	  <div class="form" style="height:35%;width:30%;">
	   <p style="font-size:20px;">鼓山區</p>
            <img src="https://img.chinatimes.com/newsphoto/2018-07-16/656/a11a00_p_03_01.jpg" alt="Smiley face" height="70%" width="70%">	
	  </div>
	  <div class="form" style="height:35%;width:30%;">
	   <p style="font-size:20px;">前金區</p>
            <img src="https://f.share.photo.xuite.net/myhome188896/1fda1e6/9321236/402921170_m.jpg" alt="Smiley face" height="70%" width="70%">	
	  </div>
	  <div class="form" style="height:35%;width:30%;">
	   <p style="font-size:20px;">苓雅區</p>
            <img src="http://p1-news.yamedia.tw/MjY3NjM2NjNuZXdz/8ea568a52570f6c4.jpg" alt="Smiley face" height="70%" width="70%">	
	  </div>
	  <div class="form" style="height:35%;width:30%;">
	   <p style="font-size:20px;">小港區</p>
            <img src="https://p1-news.hfcdn.com/p1-news/MjEyNjU2bmV3cw,,/c71515236f42fa0a.jpg" alt="Smiley face" height="70%" width="70%">	
	  </div>
	
</body>
</html>