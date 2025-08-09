<?php 
require_once './../classes/Editar.php';

$editar = new Editar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['deletar']) && isset($_POST['id'])) {
        $editar->deletarLivro($_POST['id']);
        header("Location: listar.php");
        exit;
    } else {
        $id = $_POST['id'];
        $nomeLivro = $_POST['nome_livro'];
        $resumoLivro = $_POST['resumo_livro'];
        $nomeAutor = $_POST['nome_autor'];

        $editar->editarLivro($id, $nomeLivro, $resumoLivro, $nomeAutor);
        header("Location: editar.php?id=" . $id . "&sucesso=1");
        exit;
    }
} 

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
    $id = (int) $_GET['id'];
    $livro = $editar->buscarLivro($id);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spider-Books</title>
  <link rel="stylesheet" href="./../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="./../img/spider.png" alt="Logo Spider-Books" width="40" height="40" class="me-2">
        Spider-Books
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-4"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item mx-4"><a class="nav-link" href="listar.php">Listar</a></li>
          <li class="nav-item mx-4"><a class="nav-link" href="cadastrar.php">Cadastrar</a></li>
          <li class="nav-item mx-4"><a class="nav-link" href="http://localhost/spiderbooks/paginas/listar.php">Editar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-5">
    <h2 class="mb-4 text-danger">Editar Livro</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="alert alert-success">Livro atualizado com sucesso!</div>
    <?php endif; ?>

    <div class="mb-3">
      <a href="editar.php?id=<?php echo $anteriorId; ?>" class="btn btn-secondary <?php echo ($anteriorId < 1) ? 'disabled' : ''; ?>">← Livro Anterior</a>
      <a href="editar.php?id=<?php echo $proximoId; ?>" class="btn btn-secondary">Próximo Livro →</a>
    </div>

    <form method="POST" class="p-4 border border-primary rounded shadow-sm bg-light">
      <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

      <div class="mb-3">
        <label for="nome_livro" class="form-label text-primary">Nome do livro:</label>
        <input type="text" class="form-control" name="nome_livro" id="nome_livro" value="<?php echo htmlspecialchars($livro['nome_livro']); ?>" required>
      </div>

      <div class="mb-3">
        <label for="resumo_livro" class="form-label text-primary">Resumo do livro:</label>
        <textarea class="form-control" name="resumo_livro" id="resumo_livro" rows="5" required><?php echo htmlspecialchars($livro['resumo_livro']); ?></textarea>
      </div>

      <div class="mb-3">
        <label for="nome_autor" class="form-label text-primary">Nome do Autor:</label>
        <input type="text" class="form-control" name="nome_autor" id="nome_autor" value="<?php echo htmlspecialchars($livro['nome_autor']); ?>" required>
      </div>
      <button type="submit" class="btn btn-danger">Atualizar Livro</button>
      <button type="submit" name="deletar" value="1" class="btn btn-outline-danger float-end" onclick="return confirm('Tem certeza que deseja excluir este livro?');">Excluir Livro</button>
    </form>
  </main>

  <footer>
    <div class="container">
      <div class="footer-row d-flex justify-content-between">
        <div>
          <p>Telefone: (44) 3622-2500</p>
          <p>CNPJ: 07.358.054/0001-99</p>
        </div>
        <div class="text-end">
          <p>Localização: Rua das Aranhas, 123 - Teia City</p>
          <p>Email: contato@spiderbooks.com</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
