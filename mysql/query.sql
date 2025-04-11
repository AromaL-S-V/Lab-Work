use testdbphp;

CREATE TABLE books (
    accession_number INT PRIMARY KEY,
    title VARCHAR(255),
    authors VARCHAR(255),
    edition VARCHAR(100),
    publisher VARCHAR(255)
);
