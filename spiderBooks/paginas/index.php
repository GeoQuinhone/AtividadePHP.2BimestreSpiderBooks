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
         <img src="./../img/spider.png" alt="Logo Spider-Books"  width="40" height="40" class="me-2">
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
  <div class="text-center mb-5">
    <h1 class="display-5 fw-bold text-danger">Bem-vindo à Spider-Books</h1>
    <p class="lead text-secondary">
      Sua central inteligente para gerenciar, cadastrar e acompanhar seus livros com facilidade e estilo.
    </p>
    <a href="#" class="btn btn-primary btn-lg mt-3">Comece agora</a>
  </div>

  <div class="card mb-5 shadow-sm border-primary">
    <div class="row g-0 align-items-center">
      <div class="col-md-4">
        <img src="./../img/livros.png" class="img-fluid rounded-start" alt="Livros"  width="80" height="80" class="me-3"/>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-primary">Organize sua biblioteca como um herói</h5>
          <p class="card-text">
            Com o Spider-Books, você pode cadastrar novos livros, listar suas coleções favoritas,
            editar informações e manter tudo sob controle em uma interface amigável.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="p-4 border border-danger rounded">
        <h4 class="text-danger">📚 Cadastro Rápido</h4>
        <p>Adicione livros com título, autor, categoria e mais em poucos cliques.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-4 border border-danger rounded">
        <h4 class="text-danger">🔎 Busca Inteligente</h4>
        <p>Encontre rapidamente qualquer livro da sua coleção com filtros personalizados.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-4 border border-danger rounded">
        <h4 class="text-danger">🛠️ Edição Simples</h4>
        <p>Atualize informações de livros a qualquer momento com total facilidade.</p>
      </div>
    </div>
  </div>
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