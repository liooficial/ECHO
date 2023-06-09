<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="zK3FcqBwvjMaKVGYllveuYroL9e6mMdqK7WFaolCEfw" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>  SERVIDOR NO.3  </title>
    <link rel="shortcut icon" href="img/icono principal.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Open + Sans: wght @ 300 & display = swap "rel =" stylesheet ">
</head>
<body>
    <header>
        <sectio class="textos-header">
            <h1>SERVIDOR NO.3  </h1>
        </sectio>
        <div class="wave"style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C201.75,153.45 228.83,11.34 500.00,49.98 L500.00,150.00 L-1.97,166.28 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Virtualizacion</h2>
            <div class="contrnedor-sobre-nosotros">
                
                <div class="contenido-textos">
                    <h3><span>1</span>¿Qué aprendemos? </h3>
                    <p>Un servidor virtual es un entorno de servidor que se ejecuta en una máquina virtual. Permite a los usuarios compartir los recursos de hardware de un servidor físico, lo que puede reducir costos y mejorar la eficiencia.</p>
                    <h3><span>2</span>Alumnos:</h3>
                    <Ol>
                        <li>Adrian Bautista Matias</li>
                        <li>Michael Cabrera Garcia</li>
                        <li>Maria Fernanda Dominguez Ezquivel</li>
                        <li>Luz Elena Jardinez Garcia</li>
                        <li>Diana Laura Lopez Romero</li>
                        <li>Vicente Tapia Hernandez</li>
                        <li>Julio Moreno Castro</li>
                    </Ol>
                </div>
            </div>       
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Tabla con resultados</h2>
                <div class="Tabla">
                    <?php
                        $servername = "192.168.0.12";
                        $database = "Progama1";
                        $username = "php";
                        $password = "uiop0988765";
                        $c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
                        $sql="select * from Temperatura";
                        $r=mysqli_query($c,$sql);
                        echo "<table>";
                        echo "<tr><th>ID</th><th>Temperatura</th></tr>";
                        while ($arr=mysqli_fetch_array($r))
                        {
                            echo "<tr>";
                            echo "<td>" . $arr["ID"] . "</td>";
                            echo "<td>" . $arr["Temp"] . "</td>";
                            echo "</tr>";
                        }
                            echo "</table>";
                    ?>
                </div>
            </div>
        </section>
        <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						Graficas de Temperaturas
					</div>
					<div class="panel panel-body">
						<div class="row">
						    <div id="cargaLineal"></div>
							<div class="col-sm-6">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </main>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
	});
</script>