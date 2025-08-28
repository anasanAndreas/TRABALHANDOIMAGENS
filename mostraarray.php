<html>
<body>
<?php
$pimagem=array("cachorro.jpg","cavalo.jpg","coelho.jpg","gato.jpg","golfinho.jpg","lontra.jpg","passaro.jpg","peixe.jpg","raposa.jpg","tartaruga.jpg");

$ppornome=$_POST['criarlista'];
$ppornum=$_POST['criarnum'];

echo "<BR><BR> Chamado pelo nome: $ppornome";
echo "<BR><BR>";
$pcaminhoimg="imagens/".$ppornome;
echo "<img src='$pcaminhoimg' width=50% height=50%>";

echo "<BR><BR> Chamado pela posição no array: $ppornum";
echo "<BR><BR>";
$pcaminho="imagens/".$pimagem[$ppornum];
echo "<img src='$pcaminho' width=50% height=50%>";
?>
</body>
</html>
