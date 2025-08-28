<html>
<head>
<title> mostrar num </title>
</head>
<body>
<center>
<?php
$posicao=$_POST["num"];
if (($posicao<0) || ($posicao>9)){
echo "numero invalido";
}else{
$pimagem=array("cachorro.jpg","cavalo.jpg","coelho.jpg","gato.jpg","golfinho.jpg","lontra.jpg","passaro.jpg","peixe.jpg","raposa.jpg","tartaruga.jpg");
$pcaminhoimg="imagens/".$pimagem[$posicao];
echo "<img src='$pcaminhoimg' width=50% height=50%>";
}
?>
<BR>
<BR>
<a href="escolhanumeros.php"><button> voltar para a pagina </button></a>
</body>
</html>
