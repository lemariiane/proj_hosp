<?php
    class ClassAluno {
        private $nome;  
        private $cpf;
        private $email;
        private $telefone;
        private $id;
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
          
        public function setCpf($cpf) {
            $this->cpf = $cpf;
            
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
            
        }

        public function setId($id) {
            $this->id = $id;
            
        }

        //get

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
            
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function getTelefone() {
            return $this->telefone;
            
        }

        public function getId() {
            return $this->id;
        }

    }

?>