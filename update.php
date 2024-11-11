<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM cineminha WHERE id=$id"; // Consulta o filme
    $result = $conn->query($sql); // Executa a consulta
    $usuario = $result->fetch_assoc(); // Obtém os dados do filme
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapa as variáveis para evitar SQL injection
    $filme = $_POST['filme'];
    $diretor = $_POST['diretor'];
    $classificacao = $_POST['classificacao'];
    $sql = "UPDATE cineminha SET nome='$filme', diretor='$diretor', classificação='$classificacao' WHERE id=$id"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Filmes</title>
</head>
<body>
    <h1>Atualizar Filme</h1>
    <form action="" method="POST">
        <label>Filme</label>
        <input type="text" name="filme" value="<?php echo $usuario['nome']; ?>" required>

        <label>Diretor:</label>
        <input type="text" name="diretor" value="<?php echo $usuario['diretor']; ?>" required>
        
        <label>Classificação:</label>
        <input type="text" name="classificacao" value="<?php echo $usuario['classificação']; ?>" required>
        
        <br>
        <input type="submit" value="Atualizar">
    </form>

    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>