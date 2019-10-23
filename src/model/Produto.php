<?php
class Produto {
    private $nome;
    private $id;
    private $preco;
    private $descricao;
    private $quantidade;
    private $imagem;


    function __construct (int $id, string $nome, float $preco, string $descricao, int $quantidade, string $imagem){

        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->imagem = $imagem;

          }
          public function setid (int $id) {
        $this->id = $id;
         }
         public function getid() : int {
        return $this->id;

         }
          public function setNome (String $nome) {
            $this->nome = $nome;
        }
        public function getNome() : String {
            return $this->nome;

        }
        public function setPreco (float $preco) {
            $this->preco = $preco;
        }
        public function getpreco() : float {
            return $this->preco;

        }
        public function setdescricao (string $descricao) {
            $this->descricao = $descricao;
        }
        public function getdescricao() : String {
            return $this->descricao;

        }
        public function setquantidade (int $quantidade) {
            $this->quantidade = $quantidade;
        }
        public function getQuantidade() : int {
            return $this->quantidade;

        }
        public function setimagem (String $imagem) {
            $this->imagem = $imagem;
        }
        public function getimagem() : String {
            return $this->imagem;
        }
       
}