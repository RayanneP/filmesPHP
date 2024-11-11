<?php
// Configurações para conectar ao banco de dados
$servername = "localhost"; // Endereço do servidor
$servername = "localhost:3306";
$username = "root"; // Usuário padrão
$password = ""; // Senha padrão
$dbname = "filmes"; // Nome do banco de dados

// Conecta ao MySQL
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica se a conexão falhou
if ($conn->connect_error) {
echo "Erro de conexão: " . $conn->connect_error; // Exibe mensagem de erro
} 
else {
echo "Conexão bem-sucedida!";
}
?>