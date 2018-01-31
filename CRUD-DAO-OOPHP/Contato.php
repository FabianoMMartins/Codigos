<?php
    class Contato {
        
        private $id = null;
        private $nome;
        private $email;
        private $telefone;
        
        public function __construct($nome, $emal, $telefone) {
           $this->nome = $nome;
           $this->emal = $email;
           $this->telefone = $telefone;
        }
        
        public function getId() {
           return $this->id;
        }
        
        public function getNome() {
           return $this->nome;
        }
        
        public function getEmal() {
           return $this->emal;
        }
        
        public function getTelefone() {
           return $this->telefone;
        }
        
        
        public function setId($id) {
           $this->id = $id;
        }
        
        public function setNome($nome) {
           $this->nome = $nome;
        }
        
        public function setEmal($emal) {
           $this->email = $email;
        }
        
        public function setTelefone($telefone) {
           $this->telefone = $telefone;
        }
    }
?>
