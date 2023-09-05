<?php 
$mysqli_connection = new MySQL i ('http://ec2-3-231-215-130.compute-1.amazonaws.com','av_jaquelinenalevaico','jaquelinenalevaico','bd_av4i_jaquelinenalevaico');
if($mysqli_connection->connect_error){
    echo "Desconectado! Erro:" . $mysqli_connection->connect_error;
} else{
    echo"Conectado!";
} 
?>