</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Cálculo de Bhaskara </title>
    <script LANGUAGE="JavaScript" type="text/javascript">
	
		var valorA = prompt("digite o valor de A:");
		var valorB = prompt("digite o valor de B:");
		var valorC = prompt("digite o valor de C:");
		var coeficiente1;
		var coeficiente2;
		var delta = (valorB * valorB) - 4 * valorA * valorC;
		document.write("Valor de Delta é: " + delta + "<br/><br/>"); 
		  coeficiente1 = (-valorB + Math.sqrt(delta)) / (2 * valorA);
		  coeficiente2 = (-valorB - Math.sqrt(delta)) / (2 * valorA);
		  
    </script>
</head>
</html>