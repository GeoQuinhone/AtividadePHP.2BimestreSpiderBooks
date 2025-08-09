<?php
require_once './../classes/Listar.php';

$listar = new Listar();
$livros = $listar->listarLivros();

if (empty($livros)) {
  echo "<p>Você precisa cadastrar pelo menos 1 livro.</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spider-Books</title>
  <link rel="stylesheet" href="./../css/style.css">
  <link rel="stylesheet" href="./../css/styleListar.css">

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <style>

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="./../img/spider.png" alt="Logo Spider-Books" width="40" height="40" class="me-2">
        Spider-Books
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-4">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="listar.php">Listar</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="http://localhost/spiderbooks/paginas/listar.php">Editar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <h1 class="text-center my-4">Lista de livros do nosso Sistema</h1>

    <table border="3">
      <tr>
        <th>Id do Livro</th>
        <th>Nome do Livro</th>
        <th>Resumo do Livro</th>
        <th>Nome do autor</th>
      </tr>
      <?php if (!empty($livros)): ?>
        <?php foreach ($livros as $linha): ?>
          <tr>
            <td data-label="Id do livro"><?= $linha['id'] ?></td>
            <td data-label="Nome do Livro"><?= $linha['nome_livro'] ?></td>
            <td data-label="Resumo do Livro"><?= $linha['resumo_livro'] ?></td>
            <td data-label="Nome do Autor"><?= $linha['nome_autor'] ?></td>
          </tr>

        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="3">Nenhum livro cadastrado.</td>
        </tr>
      <?php endif; ?>
    </table>
        <br>
        <br>
        <br>
<h4 style="background-color: #d32f2f; color: #fff; padding: 10px; border-radius: 4px; max-width: auto">
  Digite o ID do livro que você deseja atualizar:
</h4>
<form method="GET" action="editar.php" class="mb-4" style="max-width: 400px;">
  <label for="id" class="form-label text-primary">Digite o ID:</label>
  <div class="input-group">
    <input type="number" name="id" id="id" class="form-control" required min="1" placeholder="Ex: 3">
    <button type="submit" class="btn btn-danger">Ir</button>
  </div>
</form>

  </main>

  <footer>
    <div class="container">
      <div class="footer-row">
        <div class="footer-col">
          <p>Telefone: (44) 3622-2500</p>
          <p>CNPJ: 07.358.054/0001-99</p>
        </div>
        <div class="footer-col text-end">
          <p>Localização: Rua das Aranhas, 123 - Teia City</p>
          <p>Email: contato@spiderbooks.com</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>