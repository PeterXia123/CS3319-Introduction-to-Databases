USE yxia226assign2db;


SELECT * FROM Universities;

load data local infile 'readfile.txt' into table Universities 
FIELDS TERMINATED BY ','LINES TERMINATED BY '\n';

SELECT * FROM Universities;



SELECT * FROM Westcscourses;
INSERT INTO Westcscourses VALUES("cs1026","Computer Science Fundamentals I",0.5,"A/B");
INSERT INTO Westcscourses VALUES("cs1027","Computer Science Fundamentals II",0.5,"A/B");
INSERT INTO Westcscourses VALUES("cs2210","Algorithms and Data Structures",1.0,"A/B");
INSERT INTO Westcscourses VALUES("cs3319","Databases I",0.5,"A/B");
INSERT INTO Westcscourses VALUES("cs2120","Modern Survival Skills I: Coding Essentials",0.5,"A/B");
INSERT INTO Westcscourses VALUES("cs4490","Thesis",0.5,"Z");
INSERT INTO Westcscourses VALUES("cs0020","Intro to Coding using Pascal and Fortran",1.0,"");
INSERT INTO Westcscourses VALUES("cs4414","Intro to Data Science",0.5,"A/B");

SELECT * FROM Westcscourses;




SELECT * FROM Universities;
INSERT INTO Universities
 VALUES(19,"Alberta university", "Alberta", "AL", "UofA");
SELECT * FROM Universities;

SELECT * FROM Outsidecourses;
INSERT INTO Outsidecourses VALUES("CompSci022","Introduction to Programming",1,0.5,2);
INSERT INTO Outsidecourses VALUES("CompSci033","Intro to Programming for Med students",3,0.5,2);
INSERT INTO Outsidecourses VALUES("CompSci021","Packages",1,0.5,2);
INSERT INTO Outsidecourses VALUES("CompSci222","Introduction to Databases",2,1.0,2);
INSERT INTO Outsidecourses VALUES("CompSci023","Advanced Programming",1,0.5,2);

INSERT INTO Outsidecourses VALUES("CompSci011","Intro to Computer Science",2,0.5,4);
INSERT INTO Outsidecourses VALUES("CompSci123","Using UNIX",2,0.5,4);

INSERT INTO Outsidecourses VALUES("CompSci021","Intro Programming",1,1.0,66);
INSERT INTO Outsidecourses VALUES("CompSci022","Using Advanced Programming",1,0.5,66);
INSERT INTO Outsidecourses VALUES("CompSci319","Using Databases",3,0.5,66);

INSERT INTO Outsidecourses VALUES("CompSci333","Graphics",3,0.5,55);
INSERT INTO Outsidecourses VALUES("CompSci444","Networks",4,0.5,55);

INSERT INTO Outsidecourses VALUES("CompSci022","Using Packages",1,0.5,77);
INSERT INTO Outsidecourses VALUES("CompSci101","Introduction to Using Data Structures",2,0.5,77);

INSERT INTO Outsidecourses VALUES("CompSci145","hello world",2,0.5,19);
INSERT INTO Outsidecourses VALUES("CompSci133","ai",2,0.5,19);
SELECT * FROM Outsidecourses;



Select * from Equivalent;
INSERT INTO Equivalent VALUES("cs1026","CompSci022",2,"2015/5/12");
INSERT INTO Equivalent VALUES("cs1026","CompSci033",2,"2013/1/2");
INSERT INTO Equivalent VALUES("cs1026","CompSci011",4,"1997/2/9");
INSERT INTO Equivalent VALUES("cs1026","CompSci021",66,"2010/1/12");

INSERT INTO Equivalent VALUES("cs1027","CompSci023",2,"2017/6/22");
INSERT INTO Equivalent VALUES("cs1027","CompSci022",66,"2019/9/1");

INSERT INTO Equivalent VALUES("cs2210","CompSci101",77,"1998/7/12");

INSERT INTO Equivalent VALUES("cs3319","CompSci222",2,"1990/9/13");
INSERT INTO Equivalent VALUES("cs3319","CompSci319",66,"1987/9/21");
INSERT INTO Equivalent VALUES("cs2120","CompSci022",2,"2018/12/10");
INSERT INTO Equivalent VALUES("cs0020","CompSci022",2,"1999/9/17");

Select * from Equivalent;




UPDATE Equivalent SET Date = '2018/9/19' WHERE Westerncourse = 'cs0020';
UPDATE Outsidecourses SET Offer_year= 1 WHERE course_name like "Intro%";







