USE vehicles;

DROP TABLE inventory;

CREATE TABLE inventory
(
    stockid INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    model CHAR(255),
    year SMALLINT,
    warranty CHAR(255),
    #Information
    customername CHAR(255),
    arrivaldate DATE,
    sched_maintenance CHAR(255),
    unsched_maintenance CHAR(255),
    instore BOOLEAN,
    onorder BOOLEAN,
    sold BOOLEAN,
    #Characteristics
    enginecapacity DECIMAL(4,2),
    transmission CHAR(255),
    fueleconomy CHAR(255),
    horsepower SMALLINT,
    tankcapacity DECIMAL(4,2),
    cylinderconfig CHAR(255),
    #Features
    powersteering BOOLEAN,
    antilockbreaks BOOLEAN,
    airbags CHAR(255),
    onboardcomputer BOOLEAN,
    serviceindicator BOOLEAN,
    gps CHAR(255),
    color CHAR(255),
    adjustableseats BOOLEAN,
    interior CHAR(255),
    amfmstereo BOOLEAN,
    bluetooth BOOLEAN,
    keyless BOOLEAN,
    cruisecontrol BOOLEAN,
    pushbuttonstart BOOLEAN,
    sportpackage BOOLEAN,
    premiumpackage BOOLEAN
);

INSERT INTO inventory (model, year) VALUES ("Sentra", 2004);

INSERT INTO inventory (model, year) VALUES ("Cadillac", 2004);

INSERT INTO inventory (model, year) VALUES ("Neon", 2009);

source examples.sql;
