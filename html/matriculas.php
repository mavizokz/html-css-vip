<?php 
$nome = $_POST['nomedoresponsavel'];
$nomedofilho = $_POST['nomedofilho'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['serie'];
$unidade = $_POST['unidade'];

echo "<p> É um prazer te conhecer $nome!</p>";

$arquivo = "Nome: $nome , E-mail: $email";

$destino ="maria.honorio1511@gmail.com"; 
 
//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>\n";
$headers .= "Celular: $celular\n";
$headers .= "Mensagem: $mensagem";


if (mail($destino, $arquivo, $headers)) {
    echo "Email enviado com sucesso";
} else{
    echo "Falha ao enviar Email";
};
?>