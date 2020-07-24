CREATE TABLE busSuRequests (
	id int(4) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email TINYTEXT NOT NULL,
    busName TINYTEXT NOT NULL,
    ptEarn decimal(5,2) NOT NULL,
    minPts int(11) NOT NULL,
    ptVal decimal(5,2) NOT NULL,
    outsidePtsVal TINYTEXT NOT NULL,
    outsidePts TINYTEXT NOT NULL
);

CREATE TABLE busUsers (
	id int(4) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    busName TINYTEXT NOT NULL,
    busUsername TINYTEXT NOT NULL,
    password TINYTEXT NOT NULL,
    ptEarn decimal(5,2) NOT NULL,
    minPts int(11) NOT NULL,
    ptVal decimal(5,2) NOT NULL,
    outsidePtsVal TINYTEXT NOT NULL,
    outsidePts TINYTEXT NOT NULL
);

CREATE TABLE userPts (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username TINYTEXT NOT NULL,
    bus1Name TINYTEXT NOT NULL,
    bus1Pts decimal(7,2) NOT NULL,
    bus2Name TINYTEXT NOT NULL,
    bus2Pts decimal(7,2) NOT NULL,
    bus3Name TINYTEXT NOT NULL,
    bus3Pts decimal(7,2) NOT NULL,
    bus4Name TINYTEXT NOT NULL,
    bus4Pts decimal(7,2) NOT NULL,
    bus5Name TINYTEXT NOT NULL,
    bus5Pts decimal(7,2) NOT NULL,
    bus6Name TINYTEXT NOT NULL,
    bus6Pts decimal(7,2) NOT NULL,
    bus7Name TINYTEXT NOT NULL,
    bus7Pts decimal(7,2) NOT NULL,
    bus8Name TINYTEXT NOT NULL,
    bus8Pts decimal(7,2) NOT NULL,
    bus9Name TINYTEXT NOT NULL,
    bus9Pts decimal(7,2) NOT NULL,
    bus10Name TINYTEXT NOT NULL,
    bus10Pts decimal(7,2) NOT NULL,
    totalPts decimal(10,2) NOT NULL
);

CREATE TABLE redeems (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username TINYTEXT NOT NULL,
    business TINYTEXT NOT NULL,
    reward TINYTEXT NOT NULL
);