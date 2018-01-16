LOCK TABLE category WRITE;

SELECT @myRight := rgt FROM category
WHERE name = 'Furniture';

UPDATE category SET rgt = rgt + 2 WHERE rgt > @myRight;
UPDATE category SET lft = lft + 2 WHERE lft > @myRight;

INSERT INTO category(name, lft, rgt) VALUES('Bed & Bath', @myRight + 1, @myRight + 2);

UNLOCK TABLES;
