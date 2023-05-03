
<?php

// Abrir o cabeçalho de PHP.
// Vou incluir o arquivo Usuario.php.

// Contrui o controle e inclui a classe Usuario.php.
require_once "Usuario.php";

// Fiz a instância da classe Usuario, na instância da classe Usuario,
// ele chama o construtor automaticamente e chamando este método ele conecta no banco de dados.
$u = new Usuario();
// Fiz a chamada do getTodosUsuarios, que é o método getTodosUsuarios do Usuario.php, e ele retorna uma matriz com todos os usuarios.
$todosUsuario = $u->getTodosUsuarios();

//========== Este "\n" é para pular uma linha. =================
// O que faço aqui é construir uma variável chamada tabela e começo a construir um html de tabela que recebe aqui o table.

// PRESTAR ATENÇÂO AQUI aos 56 minutos do video.
// Tenho que remover o border da table.
$tabela ="<table class='table table-hover'>\n"; // Criei uma table aqui e vou concatenar com final do table após a estrutura de repetição.
$tabela .= " <tr><th>Código</th><th>Nome</th><th>Email</th></tr>";

// Agora precisarei montar uma estrutura de repetição que passe por todos os campos de dados,
// Vai passar por todos os registros que vieram como resposta de um SQL.

// Foi feita uma estrutura de repetição que vai passar por todos os usuarios, essa no caso vai,
// escrever o campo email destes usuarios, que é o que é vizualizado aos 42 minutos.

// DENTRO DESTA ESTRUTURA DE REPETIÇÂO TENHO QUE CONSTRUIR AS LINHAS DESTA TABELA.
// Aqui ao entrar no laço de repetição vai construir as linhas e consequentemente está estrutura Vai
// passar por todas as linhas da tabela do banco
while($linha = mysqli_fetch_array($todosUsuario)) {
	//echo $linha['email']."<br>"; // Em vez de colocar echo, vou usar a variável $tabela para fazer uma linha em html que é o "<tr>.
	// Eu preciso construir a tabela do html, então o que eu faço $tabela .="<tr>" e concateno criando uma "<tr>" e 
	// vou concatenando os meus elementos aqui, vou concatenar todas as linhas da tabela com endereço de email
	$tabela .="<tr>"; // Aqui foi criada uma nova linha.
	// Nesta linha vai ter os "<td>" que é uma coluna.
	// Dentro desta coluna vou concatenar $linha['email'] e concatenopara fechar o meu "</td>".
	
	$tabela .="<td>".$linha['idUsuario']."</td>";
	$tabela .="<td>".$linha['nomeCliente']."</td>";
	$tabela .="<td>".$linha['email']."</td>";
	// Agora preciso fechar o meu "</tr>" e finalizo a minha linha.
	$tabela .="</tr>";
}
$tabela .= "</table>"; // Tenho que concatenar e tem que ser após a estrutura de repetição.
// No final faço um echo tabela.
echo $tabela;

/*
Ver por que não tem ligações comoutros arquivos.

echo "Se estou vendo este texto é por que está tudo OK!";
*/

?>