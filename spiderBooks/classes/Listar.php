<?php 

    require_once 'Database.php';
    require_once 'Cadastrar.php';
    
    class Listar {
        private $db;
        
        public function __construct()
        {
            $this->db = (new Database()) -> connect();
        }

        public function listarLivros() {
        $sql = "SELECT * FROM cadastrar";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
}
























    }










?>