USE yxia226assign2db;


SELECT course_name FROM Westcscourses;



CREATE VIEW coursesfds AS
SELECT Official_name, Nick_name,City,w.course_name from 
Westcscourses as w,Universities as u, Equivalent as e,Outsidecourses as o
Where o.Offer_year = 1 and  w.course_number = e.Westerncourse and e.University_ID = u.Unique_ID and o.course_code = e.Outsidecourse and e.University_ID = o.University_ID ;

Select * from coursesfds;

Select * from coursesfds where Nick_name = "UofT";

Select * from Universities;

Delete from Universities where Nick_name like "%cord%";

Select * from Universities;

Delete from Universities where Province_code = "ON";


-- because it university in Ontario contain some parent key which is the foreign key in out western courses 

Select * from Universities;


Select * from Outsidecourses as o,Universities as u where o.University_ID = u.Unique_ID;


Delete from Outsidecourses where University_ID in (Select Unique_ID from Universities where  City = "Waterloo");

Select * from Outsidecourses;

Select * from coursesfds;

