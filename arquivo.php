<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: gray;
}	
</style>
</head>
<body>
<?php
$nome = $_GET["n"];
$dataani = $_GET["d"];
// echo "Seu nome é: " .$nome. " e sua data de nascimento é: " .$dataani;

date_default_timezone_set('America/Sao_Paulo'); // Inicio das config's para criar a função comparativa, nascimento-atual.

function idade($dataani) {                    // Inicio da função
		$dn = new DateTime($dataani);
		$agora = new DateTime();
		
		$idade = $agora->diff($dn);
		return $idade->days;
}		
		echo '<h1>Olá, ', $nome, ', espero que esteja tudo bem com você!</h1>';
		echo '<h2>Você nasceu, aproximadamente, há <span style="color:white">', idade($dataani), '</span> dias.</h2>';

// Tranformação da variavel da função, em outra variavel para melhor entendimento.
$idadereal = idade($dataani);		

// Declaração das variaveis de calculo com suas formulas
$fisico = sin($idadereal * 2 * pi() / 23)*100;
$emocional = sin($idadereal * 2 * pi() / 28)*100; 
$intelectual = sin($idadereal * 2 * pi() / 33)*100;                                 
$intuitivo = sin($idadereal * 2 * pi() / 38)*100; 

// Área de conversão dos valores em decimais para o inteiro mais próximo.
$valorIntval1 = intval($fisico);
$valorIntval2 = intval($emocional);
$valorIntval3 = intval($intelectual);        
$valorIntval4 = intval($intuitivo);

$today = date("d-m-Y");  // Atribuindo um formato da data atual para uma variavel.

echo 'Hoje (',  $today, ') seu Biorritmo está em';

echo '<h3><font color="white">Fisico: </font></h3>', $valorIntval1,"%";        // Valor do biorritmo fisico.

echo '<h3><font color="white">Emocional: </font></h3>', $valorIntval2,"%";     // Valor do biorritmo emocional.

echo '<h3><font color="white">Intelectual: </font></h3>', $valorIntval3,"%";   // Valor do biorritmo Intelectual.

echo '<h3><font color="white">Intuitivo: </font></h3>', $valorIntval4,"%";     // Valor do biorritmo Intuitivo.
?>
</body>
</html>