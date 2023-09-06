
<?php
$nome_completo = $_POST['nome_completo'];
$CPF_pessoa_fisica = $_POST['CPF_pessoa_fisica'];
$data_nascimento = $_POST['data_nascimento'];
$celular = $_POST['celular'];
$sexo = $_POST['sexo'];
$email_pessoa_fisica = $_POST['email_pessoa_fisica'];
$confirmacao_email = $_POST['confirmacao_email'];

if ($email_pessoa_fisica != $confirmacao_email) {
    echo "O campo de confirmação de e-mail não corresponde ao e-mail. Por favor, verifique.";
}

$mysqli_connection = new MySQL i ('http://ec2-3-231-215-130.compute-1.amazonaws.com','av_jaquelinenalevaico','jaquelinenalevaico','bd_av4i_jaquelinenalevaico');
if($mysqli_connection->connect_error){
    echo "Desconectado! Erro:" . $mysqli_connection->connect_error;
} else{
    echo"Conectado!";
} 

$sql = "insert into cad_pessoa_fisica(nome_completo, CPF_pessoa_fisica, data_nascimento, celular, sexo, email_pessoa_fisica, confirmacao_email)
 values ('$nome_completo', '$CPF_pessoa_fisica', '$data_nascimento','$celular', '$sexo', '$email_pessoa_fisica', '$confirmacao_email')";
$inserir = mysqli_query($conexao,$sql);


if ($inserir) {
echo "Cadastro realizado com sucesso!";
}
else{
echo "erro";
}
mysqli_close ($conexao);

?>
