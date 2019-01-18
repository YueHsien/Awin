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

	$data1=Array();

	$data2=Array();//存地區用

	$data3=Array();//存金額

	$sql="SELECT * FROM estate2 where region=";

	for($i=0;$i<count($data);$i++){

		$data1[$i]=$data[$i];

		$sql.="'$data[$i]' ";

		$sql.="OR region=";

	}

	$sql=substr_replace($sql,'',-11);

	$sql.=" ORDER BY id";
	$result = mysqli_query ( $link, $sql);

	$index=0;

	while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {

		$data2[$index]=$rows[1];

		$data3[$index]=$rows[6];

		$index++;

	}

	$javascript=json_encode($data2);//地區

	$javascript2=json_encode($data3);//地區

	echo "<script>";

	echo "var javascript_array = ". $javascript . ";\n"; 

	echo "var javascript_array2 = ". $javascript2 . ";\n";

	echo "</script>";

}

?>
<div style="border-style:solid;">
<form action="test.php" method="post">
<?php
	$sql = "SELECT DISTINCT `region` FROM `estate2`";
	$result = mysqli_query ( $link, $sql);

	$index=0;
	while ( $rows = mysqli_fetch_array ( $result, MYSQLI_NUM )) {
		echo "<input type='checkbox' name='sport[]' value='".$rows[0]."'".">";
		echo "<label>".$rows[0]."</label>\t";
	}
	echo "<br>";
?>


<input type="submit">送出</input>

</form>
</div>
<canvas id="chart" width="800" height="600"></canvas>

<script>

var data=new Array();

var ctx = document.getElementById('chart').getContext('2d');

var chart = new Chart(ctx, {

    type: 'line',
    data: {

        labels:javascript_array,

        datasets: [{

            label: '金額',

            data:javascript_array2,
			backgroundColor: [

                'rgba(255, 99, 132, 0.2)',

                'rgba(54, 162, 235, 0.2)',

                'rgba(255, 206, 86, 0.2)',

                'rgba(75, 192, 192, 0.2)',

                'rgba(153, 102, 255, 0.2)',

                'rgba(255, 159, 64, 0.2)'

            ],

            borderColor: [

                'rgba(255,99,132,1)',

                'rgba(54, 162, 235, 1)',

                'rgba(255, 206, 86, 1)',

                'rgba(75, 192, 192, 1)',

                'rgba(153, 102, 255, 1)',

                'rgba(255, 159, 64, 1)'

            ],
            fill: false,

            lineTension: 0,

        }]

    },

    options: {

		

		title: {

			display: true,

			

		},

		tooltips: {

			mode: 'index',

			intersect: false,

		},

		hover: {

			mode: 'nearest',

			intersect: true

		},

		scales: {

			xAxes: [{

				display: true,

				scaleLabel: {

					display: true,

					

				}

			}],

			yAxes: [{

				display: true,
				gridLines: {
				display: false,
				color: "#000000"
				},
				scaleLabel: {

					display: true,

					labelString: '每平方面積金額'

				}

			}]

		}

	}



});

</script>

</body>

</html>