
<?Php

// Abrir cabeçalho do PHP.
// A classe cliente precisa da classe Banco, por isso está sendo inclusa aqui abaixo.

// IMPORTANTE se renomear não esquecer de salvar antes de ir mudar o nome do arquivo.
// Foi criada classe Usuario e ao instanciar a classe já conecta no banco abaixo no construtor.

	// OBS: include "Banco.php"; ==> aqui deu erro pelo fato de copiar este include mais de uma vez e ele entende que tem variáveis duplicadas.
	
	require_once "Banco.php"; // Então vou trocar pelo require_once para que funcione.
	class Usuario{
		// Abaixo os atributos da classe cliente.
		private $idUsuario;
		private $nomeUsuario;
		private $email;
		private $senha;
		private $banco; // Aqui criei um atributo chamado banco.
		
		
		
		
		// E construirei um construtor para está classe chamada banco, 
		// e ssse construtor vai servir para instanciar a classe Banco.
		function __construct() {
			// Aqui vou acessar o banco e vou dizer que esse banco é igual ao novo banco,
			// pra mim poder usar o meu banco para poder fazer as mihas operações.
			$this->banco = new Banco();
			// Na sequência chamo o banco para conectar, com a minha classe anterior chamada conectar().
			$this->banco->conectar();
			
		}
		
		// Aqui vou criar umétodo public mostrar todos os clientes.
		public function getTodosUsuarios() {
			// Vou no phpAdmin e dou um select * from usuario ORDER BY nomeCliente asc = crescente e desc é decrescente
			// Aqui funciona da seguinte forma, foi montado um SQL para retornar meus usuários de forma crescente.
			$sql = "select * from usuarios ORDER BY nomeCliente asc";
			// Chamei o método executar da classe banco e executei o SQL lá na classe Banco.
			$resultado = $this->banco->executarSql($sql);
			// Me retornou este resultado que é a matriz com todos os usuários.
			return $resultado;
			
			
		}
		
		// Vou começar construir os métodos getset da nossa classe Cliente.
		// Está function retorna o valor do $this->idUsuario.
		public function getIdUsuario () {
			// No get é o contrario, ele pega o valor da classe ele vai pegar e recuperar o valor do idUsuario.
			return $this->idUsuario;
		
		}
		
		// Este recebe o valor e este valor é jogado dentro atributo da classe.
		public function setIdUsuario ($value) {
			// Este valor que estou recebendo será jogado para dentro da classe no $idUsuario;,
			// no método set ele insere um valor para dentro de uma classe.
			$this->idUsuario=$value;
			
			
		}
		
		// Está function retorna o valor do $this->idUsuario.
		public function getNomeUsuario () {
			// No get é o contrario, ele pega o valor da classe ele vai pegar e recuperar o valor do idUsuario.
			return $this->nomeUsuario;
		
		}
		
		// Este recebe o valor e este valor é jogado dentro atributo da classe.
		public function setNomeUsuario ($value) {
			// Este valor que estou recebendo será jogado para dentro da classe no $idUsuario;,
			// no método set ele insere um valor para dentro de uma classe.
			$this->nomeUsuario=$value;
			
			
		}
		
		// Está function retorna o valor do $this->idUsuario.
		public function getemail () {
			// No get é o contrario, ele pega o valor da classe ele vai pegar e recuperar o valor do idUsuario.
			return $this->email;
		
		}
		
		// Este recebe o valor e este valor é jogado dentro atributo da classe.
		// AQUI NO SET PODE MODIFICAR O EMAIL.
		public function setemail ($value) {
			// Este valor que estou recebendo será jogado para dentro da classe no $idUsuario;,
			// no método set ele insere um valor para dentro de uma classe.
			$this->email=$value;
			
			
		}
		
		// Está function retorna o valor do $this->idUsuario.
		public function getSenha () {
			// No get é o contrario, ele pega o valor da classe ele vai pegar e recuperar o valor do idUsuario.
			return $this->senha;
		
		}
		
		// Este recebe o valor e este valor é jogado dentro atributo da classe.
		public function setSenha ($value) {
			// Este valor que estou recebendo será jogado para dentro da classe no $idUsuario;,
			// no método set ele insere um valor para dentro de uma classe.
			$this->idUsuario=value;
			
	
		}
		

	}
	
	/*
	=======================IMPORTANTE========================
	Procurar os meios de conexões e como é feito estas conexões
	entre estes arquivos ==> controleUsuario_listarTodosUsuarios.php,
	controleUsuariolistarUsuariosCaixaCombo.php, 
	view_mostrarTodosUsuarios.php.
	
	echo "Se estou vendo este texto é por que está tudo OK!";
	*/
?>

