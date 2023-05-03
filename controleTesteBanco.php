

<?php

// Pra começar acrescento o cabeçalho de PHP.
	include "Banco.php";
	$banco = new Banco();
	$banco->conectar();
	


// Após feito a conexão acima vou abrir o navegador para testar.

/*
================IMPORTANTE=====================
Interessante aqui só aparece neste arquivo, por que é diferente
do arquivo Banco que é impresso em todos os outros arquivos, 
isso quer dizerque o arquivo Banco tem conexão com todos 
os outros arquivos..
echo "Se estou vendo este texto é por que está tudo OK!";
*/

?>
