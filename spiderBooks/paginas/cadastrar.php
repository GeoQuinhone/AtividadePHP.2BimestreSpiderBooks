<?php 

  require_once './../classes/Cadastrar.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cadastrar = new Cadastrar();
    $cadastrar->adicionarLivro($_POST['nome_livro'], $_POST['resumo_livro'], $_POST['nome_autor']);
    echo "O livro foi adicionado com Sucesso!";
  }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spider-Books</title>
      <link rel="stylesheet" href="./../css/style.css">

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
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
        data-bs-target="#navbarNav"
      >
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

<main class="container my-5">
  <h2 class="mb-4 text-danger">Cadastrar Novo Livro</h2>
  
  <form method="POST" class="p-4 border border-primary rounded shadow-sm bg-light">
    <div class="mb-3">
      <label for="nome_livro" class="form-label text-primary">Nome do livro:</label>
      <input type="text" class="form-control" name="nome_livro" id="nome_livro" required>
    </div>

    <div class="mb-3">
      <label for="resumo_livro" class="form-label text-primary">Resumo do livro:</label>
      <textarea class="form-control" name="resumo_livro" id="resumo_livro" rows="5" required></textarea>
    </div>

    <div class="mb-3">
      <label for="nome_autor" class="form-label text-primary">Nome do Autor:</label>
      <input type="text" class="form-control" name="nome_autor" id="nome_autor" required>
    </div>
    <button type="submit" class="btn btn-danger">Cadastrar Livro</button>
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