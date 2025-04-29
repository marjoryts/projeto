<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST ['telefone'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$genero = $_POST['genero'];
$tipoInscricao = $_POST['tipoInscricao'];
$mensagem = $_POST['mensagem'];

echo '<p> Nome completo: ', $nome, '</p>';
echo '<p> Email: ', $email, '</p>';
echo '<p> Mensagem: ', $mensagem, '</p>';
echo '<p> Telefone: ', $telefone, '</p>';
echo '<p> Gênero:', $genero, '</p>';
echo '<p> Tipo de Inscrição: ', $tipoInscricao, '</p>'; 
echo '<p>data_de_nascimento: ', $data_de_nascimento, '</p>';

echo "<h2>Inscrição realizada com sucesso!</h2>";
echo "<a href='index.php'>Voltar ao formulário</a>";

?>
