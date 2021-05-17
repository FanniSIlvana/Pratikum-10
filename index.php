<?php
include('koneksi.php');
$produk = mysqli_query($koneksi,"SELECT * FROM tbl_covid");
while($row = mysqli_fetch_array($produk)){
	$negara[] = $row['negara'];
	$total_kasus[] = $row['total_kasus'];
	$kasus_baru[] = $row['kasus_baru'];
	$total_meninggal[] = $row['total_meninggal'];
	$meninggal_baru[] = $row['meninggal_baru'];
	$total_sembuh[] = $row['total_sembuh'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bar Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{
					label: 'Total Kasus',
					data: <?php echo json_encode($total_kasus); ?>,
					backgroundColor: 'pink',
					borderColor: 'red',
					borderWidth: 1
				},
				{
					label: 'Kasus Baru',
					data: <?php echo json_encode($kasus_baru); ?>,
					backgroundColor: 'lightblue',
					borderColor: 'blue',
					borderWidth: 1
				},
				{
					label: 'Total Meninggal',
					data: <?php echo json_encode($total_meninggal); ?>,
					backgroundColor: 'orange',
					borderColor: 'yellow',
					borderWidth: 1
				},
				{
					label: 'Meninggal Baru',
					data: <?php echo json_encode($meninggal_baru); ?>,
					backgroundColor: 'aquamarine',
					borderColor: 'green',
					borderWidth: 1
				},
				{
					label: 'Total Sembuh',
					data: <?php echo json_encode($total_sembuh); ?>,
					backgroundColor: 'darkgrey',
					borderColor: 'grey',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>