<html>
<head>
<title> new document </title>
</head>
<body>
<center>
<?php
$posicao=$_GET["animal"];
$pimagem=array("cachorro.jpg","cavalo.jpg","coelho.jpg","gato.jpeg","golfinho.jpg","lontra.jpg","passaro.jpg","peixe.jpg","raposa.jpg","tartaruga.jpg");
$pcaminhoimg="imagens/".$pimagem[$posicao];
echo "<img src='$pcaminhoimg' width=50% height=50%>";
?>
<BR>
<a href="escolhaimagens.php"><button> voltar para o inicio </button></a>
<BR>
<BR>
</body>
</html>
