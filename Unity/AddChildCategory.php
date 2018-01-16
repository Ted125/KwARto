LOCK TABLE category WRITE;

SELECT @myLeft := lft FROM category

WHERE name = 'All';

UPDATE category SET rgt = rgt + 2 WHERE rgt > @myLeft;
UPDATE category SET lft = lft + 2 WHERE lft > @myLeft;

INSERT INTO category(name, lft, rgt) VALUES('Furniture', @myLeft + 1, @myLeft + 2);

UNLOCK TABLES;
