<?php

/*
Para trabalhar com conexão no servidor MySQL com PHP,
 basta utilizar a função mysql_connect. 
 A primeira função estabelece uma conexão com o 
 servidor MySQL. Para isso é necessário informar 3 parâmetros. 
 */
 
 /*
 
 Como usar o mysqli_query?
O primeiro parâmetro de mysqli_query não é a consulta SQL, 
como era com mysql_query. Agora é necessário passar o 
identificador da conexão (retornado por mysqli_connect) e,
 depois, a string com a consulta SQL; mysqli_close exige o
 parâmetro que identifica a conexão.
 */
 
 /*
 Como conectar o banco de dados no PHP?
Como se conectar ao MySQL usando PHP
Conecte-se ao servidor MySQL usando a instrução mysqli_connect .
Por exemplo: $con = mysqli_connect('HOSTNAME','USERNAME','PASSWORD'); ...
Selecione o banco de dados que deseja acessar usando mysqli_select_db .
 Por exemplo: mysqli_select_db('DATABASENAME', $con)
 */
 
 /*
 O que é MySQL e PHP?
O PHP e MySQL possuem total compatibilidade, e funcionam muito
 bem juntos. O PHP possui todas as funções para conectar ao MySQL,
 consultar tabelas e realizar operações de insert, entre outras.
 Neste artigo, explicaremos o processo básico para se conectar ao mysql 
 e realizar uma consulta, usando PHP.
 São eles, endereço do servidor, login e senha.
*/

// Aqui foi criada a classe Banco.
class Banco{
	private $endereco="localhost";
	private $nomeBase="paginasDinamicas";
	private $usuario="root";
	private $senha="";
	//private $port = 3306; // Está é a porta padrão, como a minha está padrão não preciso passar aqui.
	private $con;
	
	
	
	// Aqui abaixo vou criar um método conectar que vai colocar uma conexão no atributo chamado $con.
	public function conectar() {
		// Não esquecer de colocar o this-> em cada variável.
		$this->con = mysqli_connect($this->endereco,$this->usuario,$this->senha,$this->nomeBase);
	}
		// Aqui abaixo vai receber uma string sqle vai executar está string sql na base de dados
		// Foi criado o método para executar sql.
	public function executarSql($sql) {
		// Abaixo joguei o resultado dentro de uma variável = $resultado
		$resultado = mysqli_query($this->con,$sql);
		// Vou retornar o resultado pro cliente que chamar.
		// se não der erro no navegador está OK! a conexão.
		return $resultado;
		
		
		
	}
	
}

/*
=================IMPORTANTE==================
Verificar por que obanco se conecta com todos os arquivos,
qual o meio utilizadopara isso.

	echo "Se estou vendo este texto é por que está tudo OK!";
	
*/

?>