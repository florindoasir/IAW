SELECT * FROM city WHERE NAME LIKE '%Palencia%';

DELETE FROM city WHERE ID = 2;

INSERT INTO city 
(Name, CountryCode, District, Population)
VALUES ("Palencia", "AFG", "CYL", 84000);

UPDATE city SET Population="79000" WHERE NAME = "Palencia";