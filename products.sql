/* Excluindo a tabela de produtos, se ela existir */
/* DROP TABLE IF EXISTS products; */

/* Criando a tabela de produtos */
CREATE TABLE products (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  quantity int NOT NULL,
  category varchar(255) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  modified_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

/* Inserindo dados de exemplo */
INSERT INTO products
  (name, quantity, category)
VALUES
  ('Camiseta', 5, 'Roupas'),
  ('Calça Jeans', 3, 'Roupas'),
  ('Tênis Esportivo', 7, 'Calçados'),
  ('Relógio de Pulso', 2, 'Acessórios'),
  ('Mochila', 4, 'Bolsas'),
  ('Óculos de Sol', 1, 'Acessórios'),
  ('Jaqueta de Couro', 4, 'Roupas'),
  ('Sandália', 6, 'Calçados'),
  ('Boné', 8, 'Acessórios'),
  ('Vestido', 2, 'Roupas'),
  ('Sapatênis', 5, 'Calçados'),
  ('Carteira', 3, 'Acessórios');

/* Busca as infos dos cards */
SELECT
  (SELECT COUNT(DISTINCT products.name) FROM products) AS diversity,
  (SELECT SUM(products.quantity) FROM products) AS total_inventory,
  (SELECT COUNT(*) FROM products WHERE products.created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)) AS recent_products,
  (SELECT COUNT(*) FROM 
    (SELECT * FROM products WHERE products.quantity < 5) AS low_stock
  ) AS low_stock_count
FROM products;

/* Atualizando um dado*/
UPDATE products
SET products.quantity = 10 
WHERE id=2;