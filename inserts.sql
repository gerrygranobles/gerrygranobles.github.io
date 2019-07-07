INSERT INTO victim
	(`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
VALUES (4, 'Joe', 'Smith', 'Head of IT', 'jsmith@google.com');

INSERT INTO victim
	(`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
VALUES (1, 'Jane', 'Doe', 'Not Head of IT', 'jdoe@jealous.com');

INSERT INTO victim
	(`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
VALUES (2, 'Bill', 'Jones', 'CyberSecurity', 'bjonesh@hackerman.com');

INSERT INTO victim
	(`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
VALUES (3, 'Ella', 'Elles', 'Intern', 'jsmith@grunt.com');

INSERT INTO victim
	(`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
VALUES (2, 'Mary', 'Soria', 'Dutiful Wife', 'msorz@gmail.com');


INSERT INTO incident
	(`typeID`, `date`, `state`,  `ipAddressID`,`victimNumber`, `commentID`)
VALUES (4, '2018-06-03', 'open', 4, 3, 1);

INSERT INTO incident
	(`typeID`, `date`, `state`,`ipAddressID`,`victimNumber`, `commentID`)
VALUES (3, '2018-01-01', 'closed', 2, 2, 2);

INSERT INTO incident
	(`typeID`, `date`, `state`,`ipAddressID`,`victimNumber`, `commentID`)
VALUES (8, '2015-11-17', 'closed', 1, 1, 3);

INSERT INTO incident
	(`typeID`, `date`, `state`, `ipAddressID`,`victimNumber`, `commentID`)
VALUES (10, '2018-9-15', 'stalled', 3, 4, 4);


INSERT INTO ipAddress
	(`id`, `ipAddress`)
VALUES (1,'198.168.2.4');

INSERT INTO ipAddress
	(`id`, `ipAddress`)
VALUES (2,'111.111.1.1');

INSERT INTO ipAddress
	(`id`, `ipAddress`)
VALUES (3,'164.158.1.09');

INSERT INTO ipAddress
	(`id`, `ipAddress`)
VALUES (4,'666.666.666.666');


INSERT INTO comment
	(`id`, `handlerName`, `comment`)
VALUES (1,'Mike K.', 'A real doozy');

INSERT INTO comment
	(`id`, `handlerName`, `comment`)
VALUES (2,'Larry P.', 'easy peasy');

INSERT INTO comment
	(`id`, `handlerName`, `comment`)
VALUES (3,'Joe S.', 'some comment');

INSERT INTO comment
	(`id`, `handlerName`, `comment`)
VALUES (4,'Dan L.', 'some lengthy detailed comment');

INSERT INTO comment
	(`id`, `handlerName`, `comment`)
VALUES (4,'Bob H.', 'some lengthy detailed commentsome lengthy detailed commentsome lengthy detailed commentsome lengthy detailed commentsome lengthy detailed comment');

INSERT INTO type
	(`typeID`, `type`)
VALUES (1, 'DoS');

INSERT INTO type
	(`typeID`, `type`)
VALUES (2, 'MitM');

INSERT INTO type
	(`typeID`, `type`)
VALUES (3, 'Phishing');

INSERT INTO type
	(`typeID`, `type`)
VALUES (4, 'Drive-by');

INSERT INTO type
	(`typeID`, `type`)
VALUES (5, 'Password');

INSERT INTO type
	(`typeID`, `type`)
VALUES (6, 'SQL Injection');

INSERT INTO type
	(`typeID`, `type`)
VALUES (7, 'XSS');

INSERT INTO type
	(`typeID`, `type`)
VALUES (8, 'Eavesdropping');

INSERT INTO type
	(`typeID`, `type`)
VALUES (9, 'Birthday');

INSERT INTO type
	(`typeID`, `type`)
VALUES (10, 'Malware');