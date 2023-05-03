<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de usuários</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Todos os usuários</h2>
  <p>Lista de usuários cadastrados:</p>      

<?php include "controleUsuariolistarUsuariosCaixaCombo.php";?>
<?php include "controleUsuario_listarTodosUsuarios.php";?>
  
 
</div>

</body>
</html>
