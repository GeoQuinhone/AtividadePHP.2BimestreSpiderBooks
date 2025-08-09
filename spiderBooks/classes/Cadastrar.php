<?php 

    require_once 'Database.php';

    class Cadastrar{

        private $db;
        
        public function __construct()
        {
            $this->db = (new Database())->connect();
        }

        public function adicionarLivro($nomeLivro, $resumoLivro, $nomeAutor){

            $sql= "INSERT INTO cadastrar (nome_livro, resumo_livro, nome_autor) VALUES (:nome_livro, :resumo_livro, :nome_autor)";
            $query = $this->db->prepare($sql);
            $query -> execute([
                'nome_livro' => $nomeLivro,
                'resumo_livro' => $resumoLivro,
                'nome_autor' => $nomeAutor,
            ]);

        }
















    }
?>