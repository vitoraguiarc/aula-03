<?php

	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;
	$operacao = (string) null;

	if(isset($_POST["btncalc"]))
	{
		$valor1 = $_POST["txtn1"];
		$valor2 = $_POST["txtn2"];

		$operacao = $_POST['rdocalc'];
		
		if($_POST["txtn1"] == "" || $_POST["txtn2"] == "") {
			echo("Verificar se todos os valores foram preenchidos");
		}else
		{
			if(!is_numeric ($valor1) || !is_numeric ($valor2)) {
				echo("Todos os valores devem ser números válidos");
			}else
			{
				switch($operacao) {
					case "somar":
						$resultado = $valor1 + $valor2;
						break;
					case "subtrair":
						$resultado = $valor1 - $valor2;
						break;
					case "multiplicar":
						$resultado = $valor1 * $valor2;
						break;
					default:
						$resultado = $valor1 / $valor2;
						break;

				}
			}

		}
	}
?>

<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1)?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?php echo($valor2)?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?php
							echo($resultado);
						?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

