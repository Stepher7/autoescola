<?php
require_once "config.php";

$rota = $_GET["rota"] ?? "";
if ($rota == "alunos/create") {
      create();
} elseif ($rota == "alunos") {
      read();
}
function create()

{
    global $con;



$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$data_nascimento = $_POST["data_nascimento"];

    $sql = "INSERT INTO Alunos (nome, email, telefone, data_nascimento)
        VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    

$stmt->execute([
    $nome,
    $email,
    $telefone,
    $data_nascimento
]);


    echo json_encode([
        "mensagem" => "Aluno cadastrado com sucesso!"
    ]);
}
function read()
{
    global $con;

    $sql = "SELECT * FROM Alunos";

    $stmt = $con->prepare($sql);
    $stmt->execute();
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($alunos);
}






?>