-- View all pets
SELECT * FROM Pets;

-- Pets from Fernanda
SELECT * FROM Pets
WHERE owner_id = 3;

-- Users who own cats
SELECT Users.name, email 
FROM Pets INNER JOIN Users
ON Users.id = Pets.owner_id
WHERE Pets.species = 'cat';

-- Users whose pets weight more than or equal to 4kg
SELECT Users.name, email
FROM Pets INNER JOIN Users
ON Users.id = Pets.owner_id
WHERE weight >= 4;
