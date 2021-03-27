<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso PHP</title>
</head>
<body>

    <?php 
	echo 'Esto es una prueba';
	// Esto es un comentario
	/* Esto es un 
	comentario multilinea */ 
	
	$a = 10;

	?>

	<?php if ( $a === 9): ?>
		<p> La variable $a es igual a 10 </p>
	<?php else: ?>
		<p>La variable $a no es igua a 10</p>
	<?php endif ?>

	<h2> Operadores </h2>
	<ul>
		<li>Precedencia de los operadores</li>
		<li>Operadores aritmeticos</li>
		<li>Operadores combinados</li>
		<li>Operadores de asignación</li>
			<!--- =  y => en arreglos -->
		<li>Asignación por referencia</li>
		<li>Operadores bit a bit</li>
		<li>Operadores de comparación</li>
		<li>Conversiones entre varios tipos</li>
		<li>Operador ternario</li>
		<li>Operadores de control de errores</li>
		<li>Operadores de ejecución</li>

	</ul>

	<?php 
		/* var_dump( 0 == "x" ); // Retorna true
		var_dump( "1" == "1x") ; // retorna false
		var_dump( "10" == "1y0" ); // Retorna false
		var_dump( 100 == "1e2" ); // Retorna false


		var_dump( null == ""); // Retorna true
		var_dump ( bool == "true" ); // Retornar true

		switch ("x"){
			case 0:
				echo "0";
				break;
			case 1:
				echo "1";
				break;
			case "x":
				echo "x";
				break;
		}

		echo "<hr>";

		$valor = 3;

		$evaluar = (empty( $valor )) ? 'vacio' : 'lleno';

		echo $evaluar;

		if ( $valor == 2 ){
			echo 'Es igual';
		}else{
			echo 'Es diferente';
		} */

		echo "<hr>";

		// OPERADORES DE CONTROL DE ERRORES

		/* $miArchivo = @file( 'archivo-que-no-existe' ) or die( "No se ha podido abrir, el error ha sido '$php_errormsg' ");

		echo  $miArchivo; */

		/* @ Sólo funciona con expresiones (variables, llamadas a funciones o includes, constantes...) no funciona con definiciones de clases o funciones, condicionales como if o foreach. */

		// OPERADORES DE EJECUCIÓN

		$variableListarArchivos = `ls -al`;
		echo $variableListarArchivos;

		echo "<hr>";

		$shellList = shell_exec('ls -al');
		echo $shellList;
		
		// Si safe_mode está activado o shell_exec() está desactivado, las comillas no funcionarán.
		
		// Las comillas invertidas no significan nada cuando van dentro de comillas dobles.

		echo "<hr>";

		// OPERADORES DE INCREMENTO Y DE DECREMENTO

		$x = 4;

		echo "Esto es 4: ". $x++."<br>";
		echo "Esto es 5: ".$x."<br>";

		
		echo "<hr>";
		// OPERADORES PARA ARRAYS
		// Depende del orden en que sumo

		$a = array( "x" => "perro", "y" => "gato");
		$b = array( "x" => "perro", "y" => "gato","z" => "liebre");

		if ( $a == $b){
			echo "Son iguales";
		}else{
			echo "No son iguales";
		}

		$c = $a + $b;
		var_dump( $c );


		echo "<hr>";
		// OPERADORES DE TIPO

		class MiClase{

		}
		
		class OtraClase{

		}

		$p = new MiClase;

		var_dump( $p instanceof MiClase); // Retorna true,
		var_dump( $p instanceof OtraClase ); // Retorna false
	?>

	

	
	
</body>
</html>