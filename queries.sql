/* Excluindo a tabela de produtos, se ela existir */
DROP TABLE IF EXISTS products;

/* Criando a tabela de produtos */
CREATE TABLE products (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  quantity int NOT NULL,
  category varchar(255) NOT NULL,
  price decimal(10, 2) NOT NULL,
  description varchar(1000) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  modified_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

/* Inserindo dados de exemplo */
INSERT INTO products
(name, quantity, category, price, description, created_at, modified_at)
VALUES

('Arroz Tipo 1 5kg', 45, 'Alimentos', 29.90, 'Pacote de arroz branco tipo 1', '2026-01-05 09:12:00', '2026-01-05 09:12:00'),
('Relógio Analógico', 2, 'Acessórios', 279.90, 'Relógio resistente à água', '2026-01-08 10:00:00', '2026-04-05 11:11:00'),
('Camiseta Básica', 18, 'Roupas', 49.90, 'Camiseta de algodão', '2026-01-11 15:30:00', '2026-01-11 15:30:00'),
('Mochila Executiva', 13, 'Bolsas', 139.90, 'Compartimento para notebook', '2026-01-15 11:00:00', '2026-01-15 11:00:00'),
('Feijão Carioca 1kg', 38, 'Alimentos', 8.99, 'Feijão carioca selecionado', '2026-01-18 14:30:00', '2026-03-02 10:15:00'),
('Tênis Running Pro', 14, 'Calçados', 249.90, 'Tênis para corrida', '2026-01-22 08:45:00', '2026-01-22 08:45:00'),
('Óculos de Sol', 8, 'Acessórios', 99.90, 'Proteção UV', '2026-01-28 16:30:00', '2026-01-28 16:30:00'),

('Café Tradicional 500g', 22, 'Alimentos', 18.90, 'Café torrado e moído', '2026-02-02 10:40:00', '2026-05-01 15:12:00'),
('Mouse Gamer', 10, 'Eletrônicos', 149.90, 'Mouse RGB', '2026-02-06 13:30:00', '2026-02-06 13:30:00'),
('Calça Jeans Slim', 12, 'Roupas', 129.90, 'Calça jeans masculina', '2026-02-10 11:15:00', '2026-04-20 16:45:00'),
('Leite Integral 1L', 60, 'Alimentos', 5.99, 'Leite UHT integral', '2026-02-15 13:05:00', '2026-02-15 13:05:00'),
('Fone Bluetooth', 15, 'Eletrônicos', 199.90, 'Fone sem fio', '2026-02-18 09:15:00', '2026-02-18 09:15:00'),
('Boné Esportivo', 20, 'Acessórios', 39.90, 'Boné ajustável', '2026-02-22 09:20:00', '2026-02-22 09:20:00'),
('Macarrão Espaguete', 52, 'Alimentos', 4.79, 'Macarrão de trigo tipo espaguete', '2026-02-27 16:00:00', '2026-02-27 16:00:00'),

('Vestido Floral', 9, 'Roupas', 159.90, 'Vestido casual feminino', '2026-03-03 14:40:00', '2026-05-15 10:20:00'),
('Óleo de Soja 900ml', 30, 'Alimentos', 7.99, 'Óleo refinado', '2026-03-06 11:45:00', '2026-04-12 09:30:00'),
('Bolsa Feminina', 6, 'Bolsas', 179.90, 'Bolsa de ombro', '2026-03-10 17:10:00', '2026-03-10 17:10:00'),
('Sapatênis Casual', 10, 'Calçados', 179.90, 'Sapatênis masculino', '2026-03-14 12:10:00', '2026-03-14 12:10:00'),
('Carteira Masculina', 7, 'Acessórios', 79.90, 'Carteira em couro sintético', '2026-03-18 12:15:00', '2026-03-18 12:15:00'),
('Teclado Mecânico', 8, 'Eletrônicos', 299.90, 'Switch azul', '2026-03-22 10:10:00', '2026-05-30 11:40:00'),
('Açúcar Refinado 1kg', 41, 'Alimentos', 5.49, 'Açúcar refinado branco', '2026-03-25 08:20:00', '2026-03-25 08:20:00'),

('Jaqueta Corta-Vento', 7, 'Roupas', 189.90, 'Jaqueta leve esportiva', '2026-04-01 15:10:00', '2026-04-01 15:10:00'),
('Caixa de Som Bluetooth', 6, 'Eletrônicos', 249.90, 'Som portátil', '2026-04-03 16:50:00', '2026-04-03 16:50:00'),
('Sandália Confort', 16, 'Calçados', 69.90, 'Sandália confortável', '2026-04-08 11:30:00', '2026-04-08 11:30:00'),
('Cinto Casual', 9, 'Acessórios', 59.90, 'Cinto de couro sintético', '2026-04-11 10:40:00', '2026-04-11 10:40:00'),
('Biscoito Recheado', 35, 'Alimentos', 3.99, 'Biscoito sabor chocolate', '2026-04-15 17:22:00', '2026-04-15 17:22:00'),
('Mala de Viagem P', 1, 'Bolsas', 299.90, 'Mala de bordo', '2026-04-19 08:50:00', '2026-04-19 08:50:00'),

('Moletom Unissex', 11, 'Roupas', 119.90, 'Moletom com capuz', '2026-05-02 09:30:00', '2026-05-02 09:30:00'),
('Suco de Uva Integral', 14, 'Alimentos', 12.90, 'Garrafa de 1 litro', '2026-05-04 08:15:00', '2026-05-04 08:15:00'),
('Chinelo Premium', 25, 'Calçados', 39.90, 'Chinelo em borracha', '2026-05-08 15:00:00', '2026-05-08 15:00:00'),
('Fone de Ouvido P2', 25, 'Eletrônicos', 39.90, 'Fone com cabo', '2026-05-11 16:40:00', '2026-05-11 16:40:00'),
('Camisa Social', 6, 'Roupas', 149.90, 'Camisa social manga longa', '2026-05-15 13:50:00', '2026-05-15 13:50:00'),

('Chocolate Meio Amargo', 18, 'Alimentos', 8.49, 'Barra de chocolate 90g', '2026-06-16 14:25:00', '2026-06-18 10:15:00'),
('Notebook Gamer', 3, 'Eletrônicos', 4599.90, 'Notebook para jogos', '2026-06-17 09:12:00', '2026-06-17 09:12:00'),
('Camiseta Oversized', 12, 'Roupas', 79.90, 'Modelo oversized unissex', '2026-06-18 11:30:00', '2026-06-18 11:30:00'),
('Smartwatch', 2, 'Eletrônicos', 399.90, 'Relógio inteligente', '2026-06-20 13:50:00', '2026-06-23 17:30:00'),
('Tênis Casual Branco', 9, 'Calçados', 159.90, 'Tênis para uso diário', '2026-06-21 15:05:00', '2026-06-21 15:05:00'),
('Mochila Escolar', 11, 'Bolsas', 89.90, 'Mochila resistente', '2026-06-22 10:20:00', '2026-06-22 10:20:00'),
('Boné Aba Reta', 20, 'Acessórios', 49.90, 'Boné ajustável', '2026-06-23 17:00:00', '2026-06-23 17:00:00'),
('Mouse Sem Fio', 8, 'Eletrônicos', 99.90, 'Mouse ergonômico', '2026-06-24 09:35:00', '2026-06-24 09:35:00');

/* Busca as infos dos cards */
SELECT
  (SELECT COUNT(DISTINCT products.name) FROM products) AS diversity,
  (SELECT SUM(products.quantity) FROM products) AS total_inventory,
  (SELECT COUNT(*) FROM products WHERE products.created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)) AS recent_products,
  (SELECT COUNT(*) FROM 
    (SELECT * FROM products WHERE products.quantity < 5) AS low_stock
  ) AS low_stock_count
FROM products;

/* Busca as infos da tabela */
SELECT
  products.id,
  products.name,
  products.quantity,
  products.category
FROM products;