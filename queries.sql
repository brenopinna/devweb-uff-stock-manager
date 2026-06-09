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
  (name, quantity, category, price, description)
VALUES
  ('Camiseta', 5, 'Roupas', 49.90, 'Camiseta básica de algodão'),
  ('Calça Jeans', 3, 'Roupas', 129.90, 'Calça jeans azul tradicional'),
  ('Tênis Esportivo', 7, 'Calçados', 199.90, 'Tênis ideal para corridas e caminhadas'),
  ('Relógio de Pulso', 2, 'Acessórios', 249.90, 'Relógio analógico resistente à água'),
  ('Mochila', 4, 'Bolsas', 89.90, 'Mochila com compartimento para notebook'),
  ('Óculos de Sol', 1, 'Acessórios', 79.90, 'Óculos de sol com proteção UV'),
  ('Jaqueta de Couro', 4, 'Roupas', 299.90, 'Jaqueta de couro sintético'),
  ('Sandália', 6, 'Calçados', 59.90, 'Sandália confortável para uso diário'),
  ('Boné', 8, 'Acessórios', 39.90, 'Boné ajustável de tecido'),
  ('Vestido', 2, 'Roupas', 149.90, 'Vestido casual estampado'),
  ('Sapatênis', 5, 'Calçados', 179.90, 'Sapatênis moderno para uso casual'),
  ('Carteira', 3, 'Acessórios', 69.90, 'Carteira masculina em couro sintético');

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