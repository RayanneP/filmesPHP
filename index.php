<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Filmes</title>
</head>
<body>
<h1>Gerenciamento de Filmes</h1>
<form action="store.php" method="POST">
<label for>Filme:</label>
<input type="text" name="nome" required>
<label for>diretor:</label>
<input type="text" name="diretor" required>
<label for>classificação:</label>
<input type="text" name="classificacao" required>
<br>
<input type="submit" value="Adicionar Filme">
</form>
<hr>
<h2>Lista de Filmes</h2>
<div id="cineminha">
<?php include 'read.php'; ?>
</div>
</body>
</html>
