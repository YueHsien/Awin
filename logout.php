<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>index.php</title>
</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
echo "即將登出!請稍後";
header("Refresh: 0; url=first.php");
?>
</body>
</html>
