SET SESSION FOREIGN_KEY_CHECKS=0;


/* Create Tables */

CREATE TABLE chunk
(
	id int NOT NULL AUTO_INCREMENT,
	noun text NOT NULL,
	particle text NOT NULL,
	verb text NOT NULL,
	PRIMARY KEY (id)
);



