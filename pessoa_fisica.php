<?php

$host = "ec2-3-231-215-130.compute-1.amazonaws.com";
$database = "bd_av4i_jaquelinenalevaico";
$username = "av_jaquelinenalevaico";
$password = "jaquelinenalevaico";

   try {
       $conexao = new PDO("mysql:host=".$ec2-3-231-215-130.compute-1.amazonaws.com.";dbname=".$bd_av4i_jaquelinenalevaico, $av_jaquelinenalevaico, $jaquelinenalevaico);
       echo "Sucesso de conexão com a base";


   } catch (PDOException $erro) {
       echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
   }  

?>