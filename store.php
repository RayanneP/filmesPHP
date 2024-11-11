<?php
include 'conexao.php'; // Inclui o arquivo de conexão
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
$nome = $_POST['nome']; // Recebe o filme
$diretor = $_POST['diretor']; // Recebe o diretor
$classificacao = $_POST['classificacao']; // Recebe o diretor
$sql = "INSERT INTO cineminha (nome, diretor, classificação) VALUES ('$nome',
'$diretor', '$classificacao')"; // Prepara a consulta
// Executa a consulta e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
header("Location: index.php"); // Redireciona para a página principal
} else {
echo "Erro: " . $conn->error; // Mostra erro, se houver
}
}
?>
