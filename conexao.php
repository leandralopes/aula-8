<?php //conexão procedural
//criar variaveis de conexão //127.0.0.1
$servidor   = "localhost"; 
$usuario   = "Laura";
$senha      = "123456";
$bd         = "bdcurso";

//criar conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);
$con = mysqli_connect($servidor,$usuario,$senha,$bd);

//var_dump($con);
if($con){
    echo "Conectou ao BD";
} else {
    echo "Falha de conexão com o BD";
}
