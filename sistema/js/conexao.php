<?php 
$host ='localhost';
$use = 'root';
$senha = '';
$bd = 'sistema';
$conexao = new mysqli($host, $user, $senha, $bd);
// verificação a conexo
if ($conexao -> connect_error){
    echo "deu ruim";
}else{
    echo "deu bom";
}
?>