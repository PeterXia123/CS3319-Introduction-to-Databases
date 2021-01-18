# CS3319-Introduction-to-Databases
This course introduces student to database management systems. The course discusses how to design a database for a real application. Design of good relational tables is followed by the use of these tables. The standard SQL data manipulation language will be used. Following the logical design phase, we discuss issues of physical storage structures and indexes. Finally, issues of backup and recovery, concurrency control and data distribution will be introduced.

Assignment 1
Objectives:
Upon completion of this assignment, you should be able to:

read a situation/scenario that describes data  and  then represent a model of the data and the relationships between the data using and ER diagram
map your ER diagram to a relational database.
insert nodes into a B+ tree given the order of the B+ tree
Part 1:
Draw the complete Entity Relation Diagram for the following scenario:

A bank needs a new database to keep track of its branches. 

Each branch  has a branch number, street address, phone numbers (Fax and Voice), city, province, postal code and a description (like Westmount Branch)
Each branch employs at least 3 employees but normally more than 3. Employees must only work at one branch. Keep track of the date they start at their branch. 
Each branch is managed by an employee (the  manager) and the manager manages only one branch.
An employee has an employee number (6 digit), social security number, first name, last name,  and salary per year. 
The branch supplies 3 services. These services are:
Accounts (including joint accounts, 1 or 2 people). An account has a unique account number (10 digit), account type. The date that the account was opened by a customer should also be kept. The account must be opened by a branch and only one branch.  Every branch has at least one account.
Credit cards. A credit card has a unique credit card number (10 digit), name (Visa, Master Card, etc..). The date that the customers credit card expires should also be kept. The credit card must belong to a branch and only belong to one branch. All branches offer credit cards.
Safety Deposit Boxes: A safety deposit box has a box number. This box number is just unique to the branch, it is NOT unique to all the branches. Thus Branch A might have a box number 111 and Branch B might have a box number 111. A safety deposit box has a width, height and depth. 
There are customers. Each customer has a unique customer number, first name, last name, street address, city, province, postal code and phone number.
Customers can open an account and the account could be joint (2 customers share the same account but no more than 2 can share an account). A customer could have more than one account. 
Customers can get credit cards. They can get more than 1 credit card. A credit card can only belong to one customer. Credit cards arent created until a customer requests one. 
Customers can rent safety deposit boxes. They can rent more than one safety deposit boxes. Only one customer can rent a safety deposit box. 
All branches have customers who have accounts and customers who have credit cards but not all branches have safety deposit boxes.
Customers MUST have an account in order to be in the database but they might not have credit card or a safety deposit box. 
Credit Cards and accounts are generated as they are assigned to customers but safety deposit boxes just exist even without being rented to a customer.
If I have not explicitly stated something, then there is an obvious choice. Do not add any extra relationships that you assume should exist, just include the ones mentioned above.

Show both the cardinality of the relationships (the 1:M notation on the lines) and the participation (include both the (min, max) constraints AND the double line/single line notation). Do NOT include any extra information than is given above to illustrate the above database. For each entity, underline the key you would pick to be the primary key (if it is a weak entity, remember to use a dashed underline), if there is more than 1 candidate key, underline the key you would pick to be the primary key but make all possible candidate keys red (including the one you pick as primary). The underling will indicate which attribute was chosen as the primary key .

You will be marked on choosing the best solution, some solutions may work but not be the best! Do NOT use the Crows Foot Notation.

Use draw.io, MS Visio, or some other software that create E-R diagrams to create your E-R Diagram. Do NOT hand draw it. If you use draw.io, to create a pdf do File>Print and then select the .pdf.

Part 2:
Map Your Entity Relation Diagram to a Relational Database conceptually (you don't have to make it in an actual DBMS, just visually represent it), showing all tables, column heading, keys (primary and foreign, indicate if the key is primary with an underline and/or foreign with a star). You may use MS Word to draw the tables, or MS Access and then take screenshots of the tables. Do NOT hand draw it.  It should look something like these first two tables in a University Database:


Part 3:
NOTE: This part can be hand drawn. Write down the answers to the following 10 questions at the top of a sheet and insert each of your answers into the tree IN THE ORDER YOU ANSWER THE QUESTIONS AS SHOWN BELOW.  You must go to left for <= in the tree and to the right for > .  Use the first letter(s) of each word  to decide where in the tree they should go and ignore the case.  Start with an an initially empty B+-tree with 2 keys and 3 pointers per node. The first step should show you entering your answer to question 1, then step 2 should show you inserting the word that is the answer to question 2, etc...You must show the tree with the actual word(s) in it at each step, NOT a numerical representation of the words. Show the tree after the insertion of each item. Remember to show ALL pointers.

What is your first name?
What is your favourite bird?
What is your favourite fruit?
What is the name of the month in which you were born?
What is the name of the country in which your father was born?
What is the last name of some famous person you would like to meet?
What is the name of a city you would love to visit someday? 
What is the name of your favourite vegetable?
What is your favourite building on campus at Western, e.g. MC
What is your last name?
