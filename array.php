<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolha um animal</title>
</head>
<body>
<?php

$pimagem = array(
    "cachorro.jpg","cavalo.jpg","coelho.jpg","gato.jpg","golfinho.jpg",
    "lontra.jpg","passaro.jpg","peixe.jpg","raposa.jpg","tartaruga.jpg"
);

echo "<form action='mostraarray.php' method='post'>";
echo "<h2>Escolhendo de formas diferentes</h2>";


echo "<p>Mostra a lista com nome para enviar:</p>";
echo "<select name='criarlista'>";

for ($posicao=0; $posicao < count($pimagem); $posicao++) {
    $nome = $pimagem[$posicao];
    $tamanho = strlen($nome);
    $mosnome = substr($nome, 0, $tamanho - 4); // -4 = remove extensão .jpg
    echo "<option value='$nome'>$mosnome</option>";
}

echo "</select><br><br>";


echo "<p>Mostra a lista com número da posição para enviar:</p>";
echo "<select name='criarnum'>";

for ($posicao=0; $posicao < count($pimagem); $posicao++) {
    $nome = $pimagem[$posicao];
    $tamanho = strlen($nome);
    $mosnome = substr($nome, 0, $tamanho - 4);
    echo "<option value='$posicao'>$mosnome</option>";
}

echo "</select><br><br>";

$n = count($pimagem);
echo "<p>Total de imagens: $n</p>";

echo "<input type='submit' value='Mostrar'>";
echo "</form>";
?>
</body>
</html>
