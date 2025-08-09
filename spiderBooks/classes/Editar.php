<?php 

require_once 'Database.php';

class Editar {

    private $db;

    public function __construct(){
        $this->db = (new Database())->connect();
    }

    public function buscarLivro($id) {
        $sql = "SELECT * FROM cadastrar WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function editarLivro($id, $nomeLivro, $resumoLivro, $nomeAutor) {
        $sql = "UPDATE cadastrar
                SET nome_livro = :nome_livro,
                    resumo_livro = :resumo_livro,
                    nome_autor = :nome_autor
                WHERE id = :id";

        $query = $this->db->prepare($sql);
        $query->execute([
            'nome_livro' => $nomeLivro,
            'resumo_livro' => $resumoLivro,
            'nome_autor' => $nomeAutor,
            'id' => $id
        ]);
    }

    public function deletarLivro($id){
        $sql = "DELETE FROM cadastrar WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
    }
}
?>
