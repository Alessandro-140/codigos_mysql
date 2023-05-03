

<?php

// Abrir o cabeçalho de PHP.

require_once "Usuario.php";


$u = new Usuario();

$todosUsuario = $u->getTodosUsuarios();

//========== Este "\n" é para pular uma linha. =================

// UM combo é um SELECT
$caixaCombo = "<select name='cboUsuarios' id='cboUsuarios'>\n"; 



while($linha = mysqli_fetch_array($todosUsuario)) {
	// Essa caixa de combo é feita de options.
	$id= $linha['idUsuario'];
	$nome= $linha['nomeCliente'];
	$email= $linha['email'];
	$caixaCombo.="<option value='$id'>$nome - $email</option>\n";
	
	
}
$caixaCombo .= "</select>";
echo $caixaCombo;

?>