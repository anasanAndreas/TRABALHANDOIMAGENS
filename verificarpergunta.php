<html>
<body>
<?php
session_start();
require_once("minhasfuncoes.php");
$pimagem=criaarrayimg();
$indexperg=$_SESSION['pergunta'];
$resposta=$_POST['criarnum'];
// echo $indexperg;
if ($indexperg == $resposta){
echo "<img src='imagens/certo.jpg' width=30% height=30%>";
echo "<BR><BR> parabens! voce acertou! <BR><BR>";
$pcaminhoimg="imagens/".$pimagem[$resposta];
echo "<img src='$pcaminhoimg' width=50% height=50%><BR>";
} else{
echo "<img src='imagens/errou.jpg' width=50% height=50%>";
echo "<BR><BR> poxa... voce errou! boa sorte na proxima! <BR<BR>";
}
?>
<BR><BR>
<a href="quizdeanimais.php"> <button>
voltar para as perguntas </button> </a>
