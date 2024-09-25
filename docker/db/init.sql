USE injection_demo;

-- Criando a tabela de usuários
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO users (username, password) VALUES 
('admin', 'admin123'),
('user1', 'password1'),
('user2', 'password2');

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10, 2)
);

INSERT INTO products (name, price) VALUES 
('Product A', 19.99),
('Product B', 29.99),
('Product C', 39.99);