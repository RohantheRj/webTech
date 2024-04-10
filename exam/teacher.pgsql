rj=# CREATE TABLE Teacher (
    Tno SERIAL PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Qualification VARCHAR(50),
    Salary DECIMAL(10, 2)
);
CREATE TABLE
rj=# GRANT SELECT ON Teacher TO rj;
GRANT
rj=# INSERT INTO Teacher (Name, Qualification, Salary) 
VALUES ('2', 'Rohan', 50000.00);
INSERT 0 1
rj=# GRANT SELECT ON Teacher TO rj;
GRANT
rj=# 
