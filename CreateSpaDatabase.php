CREATE DATABASE SpaCo;
USE SpaCo;

CREATE TABLE services (
service_no tinyint(2) NOT NULL UNIQUE,
service_name varchar(20),
cost varchar(4),
PRIMARY KEY (service_no)
);

INSERT INTO services VALUES("01", "Manicure", "35");
INSERT INTO services VALUES("02", "Pedicure", "45");
INSERT INTO services VALUES("03", "Facial", "50");
INSERT INTO services VALUES("04", "One Hour Massage", "85");
INSERT INTO services VALUES("05", "30-minute Massage", "50");
INSERT INTO services VALUES("06", "Deep Tissue Massage", "100");
INSERT INTO services VALUES("07", "Honey Body Treatment", "90");
INSERT INTO services VALUES("08", "Seaweed Body Wrap", "85");
INSERT INTO services VALUES("09", "Leg Waxing", "70");
INSERT INTO services VALUES("10", "Bikini Waxing", "50");


CREATE TABLE members (
SSN varchar(9) NOT NULL UNIQUE,
fName varchar(15),
lName varchar(15),
phone varchar(10),
fav_service tinyint(2),
PRIMARY KEY(SSN),
FOREIGN KEY(fav_service) REFERENCES services(service_no) ON DELETE SET NULL ON UPDATE CASCADE
);


INSERT INTO members VALUES ("436259856", "Judy", "Lanclos", "3375698520", "01");
INSERT INTO members VALUES ("436252345", "John", "Doe", "3371368420", "05");
INSERT INTO members VALUES ("469152033", "Samantha", "Williams", "3372956100", "09");
INSERT INTO members VALUES ("598465520", "Rebecca", "Boudreaux", "2256932546", "10");
INSERT INTO members VALUES ("194657332", "June", "Perez", "2256196457", "02");
INSERT INTO members VALUES ("946665300", "Carly", "Barton", "3374699523", "03");
INSERT INTO members VALUES ("165485556", "Reese", "Glass", "3375649999", "04");
INSERT INTO members VALUES ("149455230", "Ezra", "Spencer", "3376921591", "07");
INSERT INTO members VALUES ("761231599", "Connor", "Lanclos", "3379485919", "08");
INSERT INTO members VALUES ("161036203", "Francis", "Castille", "6629154865", "06");
INSERT INTO members VALUES ("148974854", "Diana", "Dupont", "1659458232", "01");
INSERT INTO members VALUES ("665492230", "Elisha", "Chautin", "3376929812", "05");
INSERT INTO members VALUES ("536982001", "Barbara", "Jean", "9546235891", "08");
INSERT INTO members VALUES ("348950366", "Dawn", "Marie", "2253512715", "08");
INSERT INTO members VALUES ("769458812", "Ali", "Joseph", "1699458230", "04");



CREATE TABLE employees (
SSN varchar(9) NOT NULL UNIQUE,
fName varchar(15),
lName varchar(15),
phone varchar(10),
serv tinyint(2),
salary_id tinyint(1),
PRIMARY KEY(SSN),
FOREIGN KEY(serv) REFERENCES services(service_no) ON DELETE SET NULL ON UPDATE CASCADE,
FOREIGN KEY(salary_id) REFERENCES salaries(SAL_ID) ON DELETE SET NULL
);


INSERT INTO employees VALUES ("469532015", "Ashley", "Benoit", "6542395123", "01", "2");
INSERT INTO employees VALUES ("649532601", "Karen", "Bradley", "9638527410", "02", "2");
INSERT INTO employees VALUES ("194687523", "Erin", "Pike", "7418529630", "03", "3");
INSERT INTO employees VALUES ("164978523", "Collette", "Garrison", "1239874560", "04", "5");
INSERT INTO employees VALUES ("321654987", "Lillian", "Livingston", "3021645789", "05", "5");
INSERT INTO employees VALUES ("123456789", "Catherine", "Knott", "3362301547", "06", "5");
INSERT INTO employees VALUES ("987654312", "Fern", "Jordan", "9632154870", "07", "4");
INSERT INTO employees VALUES ("456789123", "Virginia", "Molly", "4965812307", "08", "4");
INSERT INTO employees VALUES ("456123789", "Emily", "Ellis", "1199654228", "09", "1");
INSERT INTO employees VALUES ("654987321", "Kiara", "Stone", "1654899500", "10", "1");


CREATE TABLE salaries (
SAL_ID tinyint(1) NOT NULL UNIQUE,
salary varchar(6),
PRIMARY KEY(SAL_ID)
);


INSERT INTO salaries VALUES("1", "28000");
INSERT INTO salaries VALUES("2", "30000");
INSERT INTO salaries VALUES("3", "32000");
INSERT INTO salaries VALUES("4", "34000");
INSERT INTO salaries VALUES("5", "40000");


