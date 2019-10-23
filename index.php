
<?php

require_once __DIR__ ."/src/model/produto.php";
require_once __DIR__ . "/src/controller/ProdutoController.php";

$p1 = new produto(1, "joelho", 0.85, "material de construção com curva de 90 graus", 10, "exemplo/imagemexemplo.png");

$Controlador = new ProdutoController();
$Controlador->inserirProduto($p1);

echo 'teste';