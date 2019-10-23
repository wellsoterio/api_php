<?php
    require_once __DIR__ . "/../model/Produto.php";
    require_once __DIR__ . "/../model/persistence/ProdutoDao.php";

    class ProdutoController{

        public function inserirProduto(Produto $p){
            $produtoDao = new ProdutoDao();
            echo $produtoDao->inserirProduto($p);
            exit;
            return $produtoDao->inserirProduto($p);
        }
        public function alterarProduto(Produto $p){
            
        }
        public function removerProduto(int $id){
            
        }
        public function buscarProduto(int $id){
            
        }
    }