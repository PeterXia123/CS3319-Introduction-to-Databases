USE yxia226assign2db;



-- Query 1
SELECT course_name FROM Westcscourses;

-- ---------
-- Query 2
select distinct  course_code  from Outsidecourses;

 -- --------
-- Query 3
Select * from Westcscourses order by course_name;

 -- ---------
-- Query 4
Select course_number,course_name from Westcscourses where Weight = 0.5;
 -- ---------
-- Query 5
Select course_code,course_name from Outsidecourses as o,Universities as u
where Official_name = "University Of Toronto" and o.University_ID = u.Unique_ID;
 -- --------
-- Query 6
Select course_name,Nick_name from Outsidecourses as o,Universities as u
Where o.course_name like "%Introduction%" and o.University_ID = u.Unique_ID;
 -- ---------
-- Query 7
Select Outsidecourse, Official_name,Westerncourse,Date from Equivalent as e,Universities as u
Where e.University_ID = u.Unique_ID and e.Date < DATE_SUB(CURDATE(),INTERVAL 5 YEAR);

 -- ---------
-- Query 8
Select w.course_name, Nick_name from Equivalent as e ,Universities as u,Westcscourses as w,Outsidecourses as o
Where e.Westerncourse  = "cs1026" and e.University_ID = u.Unique_ID and o.course_code = e.Outsidecourse and e.University_ID = o.University_ID and e.Westerncourse = w.course_number;
 -- ---------
-- Query 9
Select count(*) from Equivalent where Westerncourse = "cs1026";

 -- ---------
-- Query 10

Select w.course_name,Nick_name from Equivalent as e 
inner join Universities as u On e.University_ID  = u.Unique_ID 
Inner join Westcscourses as w on w.course_number = e.Westerncourse
Where City = "Waterloo";


 -- ---------
-- Query 11
Select Official_name from Equivalent as e  right join Universities as u on u.Unique_ID = e.University_ID where e.Westerncourse is NULL; 
 -- ---------
-- Query 12
Select w.course_name,e.Westerncourse from Equivalent as e,Outsidecourses as o,Westcscourses as w,Universities as u where e.Outsidecourse = o.course_code and e.University_ID =u.Unique_ID and (o.Offer_year = 3 or o.Offer_year = 4)and w.course_number = e.Westerncourse;
 -- ---------
-- Query 13
Select course_name from Equivalent as e,Westcscourses as w where w.course_number = e.Westerncourse  group by Westerncourse having count(Outsidecourse)>1;
 -- ---------
-- Query 14
Select Westerncourse as "Western Course Number",w.course_name as "Western Course Name",w.Weight as "Course Weight",o.course_name as "Other University Course Name",Official_name as "University Name",o.Weight as "Other Course Weight" from Westcscourses as w, Universities as u, Equivalent as e,Outsidecourses as o where e.Westerncourse = w.course_number and e.Outsidecourse =o.course_code and w.weight != o.weight and o.University_ID = u.Unique_ID and o.University_ID = e.University_ID;
















