<?php
include('koneksi.php');
$kasus = mysqli_query($koneksi,"SELECT * FROM tbl_covid");
while($row = mysqli_fetch_array($kasus)){
	$negara[] = $row['negara'];
	$total_kasus[] = $row['total_kasus'];
	$kasus_baru[] = $row['kasus_baru'];
	$total_meninggal[] = $row['total_meninggal'];
	$meninggal_baru[] = $row['meninggal_baru'];
	$total_sembuh[] = $row['total_sembuh'];
}
?>
<!doctype html>
<html>

<head>
	<title>Line Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var line = document.getElementById("chart-area");

		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 18;

		var linedata = {
			labels: <?php echo json_encode($negara); ?>,
			datasets: [{
				label: "Total Kasus",
				data: <?php echo json_encode($total_kasus); ?>,
				lineTension: 0,
				fill: false,
				borderColor: 'blue'
			},
			{
				label: "Kasus Baru",
				data: <?php echo json_encode($kasus_baru); ?>,
				lineTension: 0,
				fill: false,
				borderColor: 'orange'
			},
			{
				label: "Total Meninggal",
				data: <?php echo json_encode($total_meninggal); ?>,
				lineTension: 0,
				fill: false,
				borderColor: 'green'
			},
			{
				label: "Meninggal Baru",
				data: <?php echo json_encode($meninggal_baru); ?>,
				lineTension: 0,
				fill: false,
				borderColor: 'red'
			},
			{
				label: "Total Sembuh",
				data: <?php echo json_encode($total_sembuh); ?>,
				lineTension: 0,
				fill: false,
				borderColor: 'grey'
			}]
		};

		var chartOptions = {
			legend: {
				display: true,
				position: 'top',
				labels: {
					boxWidth: 80,
					fontColor: 'black'
				}
			}
		};

		var lineChart = new Chart(line, {
			type: 'line',
			data: linedata,
			options: chartOptions
		});
	</script>
</body>

</html>
