<?php

require_once __DIR__ . "/../../service/DatabaseService.php";
require_once __DIR__ . "/../Produto.php";

    class ProdutoDao{
        public function inserirProduto(Produto $p){
            $conexao = DatabaseService::conectar();
            $queryString = "INSERT INTO produto (nome, descricao, gtd, preco, imagem) 
                    VALUE(\"" . $p->getNome() . "\",\"" .$p->getDescricao()."\",".$p->getQuantidade().",".$p->getPreco().",\"".$p->getImagem()."\");";

            if($conexao->query($queryString)){
                return true;
            }else{
                return false;
            }
        }

        public function alterarProduto(Produto $p){
            
        }
        public function removerProduto(int $id){
            
        }

        public function buscarProduto(int $id){
            
        }
    }   
    