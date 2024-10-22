<?php
// Inclui o arquivo de configuração (conexão com banco de dados)
include "config.php";
// Verifica se a conexão com o banco de dados
if (!$conn){
    // Se a conexão  falhar exibe uma mensagem de erro e encerra a execução
    die("Falha na conexão: " . mysqli_connect_error());
}

//recebe os dados do formulário
$Titulo = $_POST['Titulo'];
$Autor = $_POST['Autor'];
$Editora = $_POST['Editora'];
$Sinopse = $_POST['Sinopse'];
$AnoPublicacao = $_POST['AnoPublicacao'];
$Genero = $_POST['Genero'];
$Paginas = $_POST['Paginas'];

//cria variável para inserir o registro
$sql = "INSERT INTO `livros`
(`Titulo`, `Autor`, `Editora`, `Sinopse`, `AnoPublicacao`, `Genero`, `Paginas`) VALUES 
('$Titulo','$Autor','$Editora','$Sinopse','$AnoPublicacao', '$Genero', '$Paginas')";

// Executa a conselta SQL. Se falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!!<br>";
    echo "<a href='index.html'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "Erro ao cadastrar!!<br>";
    echo "<a hrefttle='index.html'><button tittle='Home page'>Voltar</button></a>";
    echo "</center>";
}

?>