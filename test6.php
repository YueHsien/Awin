<!DOCTYPE html>

<html lang="en">

  <head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
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
</style>

  </head>

 

  <body>
  <script>
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  </script>
<div class="login-page">
  <div class="form">
	    <form action="test7.php" method="post">
			<img alt="" src="wh_02.jpg" height="212px" width="761px">
       
            <br />
            <asp:Label ID="Label1" runat="server" Font-Bold="True" Font-Size="XX-Large" Height="35px" Text="登入" Width="70px"></asp:Label>
            <br />
           
            <asp:Label ID="Label2" runat="server" Font-Size="X-Large" Height="25px" Text="帳號:" Width="65px"></asp:Label>
            <label font-size="25" height="25px" width="65px">帳號:</label>      
            <input type="text" height="30px" width="230px" name="Username">
            <br />
            <br />
            <label font-size="25">密碼:</label>
			<input type="password" height="30px" width="230px" name="Password">
      <div class="g-recaptcha" data-sitekey="6LenBYsUAAAAAK81v6sYqawQAB6CBERmonaT11af"></div>
		            <button type="submit">登入</button>　
					
    </form>
  </div>
</div>

 <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>

</html>