<html>
<body>
<center>
<h1>
<?php
session_start();
require_once("minhasfuncoes.php");
$pimagem=criaarrayimg();
$pmostrap=criarpergunta();
echo "<form action='verificarpergunta.php' method='post'>";
echo "<BR><BR>";
echo "<BR><BR>";
echo "vamos responder as perguntas";
echo "<BR><BR>";
echo "jogo de perguntas sobre animais";

echo "<BR><BR>";
$tamanho = count($pimagem)-1; // o count come�a no 0, ent�o array-1 para tamb�m come�ar no 0, e n�o causar mal funcionamento na linha 19
$sorteio=rand(0,$tamanho);
$_SESSION['pergunta']=$sorteio;
echo "<h1> $pmostrap[$sorteio] </h1>";
echo "escolha o animal referente a pergunta";
echo "<BR><BR>";
echo "<select name='criarnum'>";
for ($posicao=0;$posicao<count($pimagem);$posicao++){
$nome=$pimagem[$posicao];
$tamanho=strlen($pimagem[$posicao]);
$mosnome=substr($nome,0,$tamanho-4);
echo "<option value=$posicao> $mosnome </option>";
}
echo "</select>";
echo "<BR><BR>";
?>
<input type="submit" value="verificar">
</form>
</h1>
</html>

