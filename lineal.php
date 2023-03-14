
<?php
	$servername = "192.168.0.12";
    $database = "Progama1";
    $username = "php";
    $password = "uiop0988765";
    $c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
	$sql="SELECT * FROM Temperatura";
	$result=mysqli_query($c,$sql);
	$valoresY=array();//temp
	$valoresX=array();//id
	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}
	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
 ?>
<div id="graficaLineal"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');

	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter',
		name: 'Data Series 1'
	};
	var layout = {
		xaxis: {
			title: 'ID'
		},
		yaxis: {
			title: 'Temperaturas'
		}
	};

	var data = [trace1];

	Plotly.newPlot('graficaLineal', data,layout);
</script>