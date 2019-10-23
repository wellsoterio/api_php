CREATE TABLE produto(
    id INT NOT NULL auto_increment,
    descricao VARCHAR(255) NOT NULL,
    gtd INTEGER NOT NULL,
    preco DECIMAL (10,2) NOT NULL,
    imagem TEXT NOT NULL,
    CONSTRAINT pk_produto
    PRIMARY KEY(id)
);