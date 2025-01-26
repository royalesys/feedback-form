<?php
include_once("include/db.inc.php");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = isset($_POST['nome']) ? $conn->real_escape_string(trim($_POST['nome'])) : 'Anonymous';
    $contato = isset($_POST['contato']) ? $conn->real_escape_string(trim($_POST['contato'])) : 'Unspecified';
    $categoria = $conn->real_escape_string(trim($_POST['categoria']));
    $mensagem = $conn->real_escape_string(trim($_POST['mensagem']));

    $datetime = date('Y-m-d H:i:s');

    $status = 'PENDENTE';

    if ($nome == "") { $nome = "Anonymous"; }
    if ($contato == "") { $contato = "Unspecified"; }

 
    $sql = "INSERT INTO feedback (datetime, author, category, message, contact, status) VALUES ('$datetime', '$nome', '$categoria', '$mensagem', '$contato', '$status')";

    if ($conn->query($sql) === TRUE) {
        header("Location: feedback-enviado.php");
        exit();
    } else {
        echo "Erro ao registrar o feedback: " . $conn->error;
    }
}
$conn->close();
?>
