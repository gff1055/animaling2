
<?php
use App\Init;

if(!empty($_POST['pesquisa'])){
	$titulo = $_POST['pesquisa']." - ";
}
else
	$titulo = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?>Pesquisa</title>
</head>
<body>

<form method="Post" action="">
	<input type="text" name="pesquisa" value="<?php echo $_POST['pesquisa']?>"/>
	<input type="submit" value="Buscar"/>
	<br> Pesquisar por: &nbsp
	<input type="radio" name="tipoPesquisa" value="Tudo" checked>Tudo 
	<input type="radio" name="tipoPesquisa" value="Animais">Animais
	<input type="radio" name="tipoPesquisa" value="Posts">Posts
</form>

<?php
$possuiResultados = 0;
if(!empty($_POST['pesquisa'])){
	
	if($ocorrenciasAnimal){
		echo "<h3>Animais</h3>";
		foreach($ocorrenciasAnimal as $animal){
			echo
			"<br><b>".$animal['nome']."</b>
			<br>".$animal['descricao']."<br>";
		}
		$possuiResultados+=1;
	}

	if($ocorrenciasPost){
		echo "<h3>Posts</h3>";
		foreach($ocorrenciasPost as $postagem){
			echo "<br><b>".$postagem['nomeAnimal']."</b><br>".$postagem['acontAgora']."<br><br>";
		}
		$possuiResultados+=1;
	}
	
	if (!$possuiResultados){
		echo "NA FORAM ACHADOS RESULTADOS";
	}
}
?>