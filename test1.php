<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</head>
<body>
<?php 
require_once ("mycontacts_open.inc");
if(isset($_POST["sport"])){
	$data=Array();
	$data=$_POST["sport"];
	$data2=Array();//存地區用
	$data3=Array();//存金額
	for($i=0;$i<count($data);$i++){
		$sql="SELECT * FROM test where region='$data[$i]'";
		$result = mysqli_query ( $link, $sql);
		$index=0;
		while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
			$data2[$index]=$rows[0];
			$data3[$index]=$rows[1];
			$index++;
		}
	}

	$javascript=json_encode($data2);//地區
	$javascript2=json_encode($data3);//地區
	echo "<script>";
	echo "var javascript_array = ". $javascript . ";\n"; 
	echo "var javascript_array2 = ". $javascript2 . ";\n";
	echo "</script>";
}
?>
<form action="test.php" method="post">
 <input type="checkbox" name="sport[]" value="鼓山區"><label>鼓山區</label>
<input type="checkbox" name="sport[]" value="前金區"><label>前金區</label>
<input type="checkbox" name="sport[]" value="北區"><label>北區</label>
<input type="checkbox" name="sport[]" value="東區"><label>東區</label>
<input type="checkbox" name="sport[]" value="南區"><label>南區</label>
<input type="submit">送出</input>
</form>
<canvas id="chart" width="800" height="600"></canvas>
<script>
var ctx = document.getElementById('chart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3]
        }]
    }
});
</script>
</body>
</html>