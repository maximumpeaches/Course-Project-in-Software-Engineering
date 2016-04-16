UPDATE Inventory
SET Status = 'Sold', Warranty = variable, FirstName = variable, LastName = variable, DeliveryDate = variable
WHERE StockID = variable;

Search Sold
SELECT StockID
FROM Inventory
WHERE FirstName = variable and LastName = variable;

Delete entry
DELETE FROM Inventory
WHERE StockID = variable;

Receive car
UPDATE Inventory
SET Status = 'in stock' 
WHERE StockID = variable;

Maintenance
UPDATE Inventory
SET Sched_maintence = variable, Unsched_maintence = variable
WHERE StockID = variable;

Add order
INSERT INTO Inventory(columns)
VALUES(values)

Search
SELECT StockID
FROM Inventory
WHERE specified values
ORDER BY StockID