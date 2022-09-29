CREATE TABLE  IF NOT EXISTS prices (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    price FLOAT(8,2) NOT NULL
); 

INSERT INTO  prices (description, price) VALUES ('Apples', 27);
INSERT INTO  prices (description, price) VALUES ('Oranges', 83);
INSERT INTO  prices (description, price) VALUES ('Bananas', 12);