-- Database selection -- replace with yours
use ap4534;

-- remove tables if they already exist
drop table if exists answers;
drop table if exists questions;

-- Table questions
create table questions (
	id int auto_increment primary key,
	section varchar(40) not null,
	questionNumber int not null,
	description varchar(200) not null
);

-- Table answers
create table answers (
	id int auto_increment primary key,
	questionId int not null,
	description varchar(100) not null,
	isCorrect boolean not null,
	foreign key (questionId) references questions(id)
);


-- Questions for Variables Section 1
-- Q1
INSERT INTO questions VALUES (101, 'Variables', 1, 'Which of these is not a variable declaration?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (101, 'x = 3', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (101, 'cat = "meow"', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (101, 'x == True', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (101, 'y = False', false);

-- Q2
INSERT INTO questions VALUES (102, 'Variables', 2, 'How do we assign the variable "x" the value of 3?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (102, 'x = 3', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (102, '3 = x', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (102, 'x equals 3', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (102, 'x == 3', false);

-- Q3
INSERT INTO questions VALUES (103, 'Variables', 3,'Which of these is not a type of variable');
INSERT INTO answers (questionId, description, isCorrect) VALUES (103, 'bool', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (103, 'int', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (103, 'string', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (103, 'float', false);

-- Questions for Operations Section 2
-- Q1
INSERT INTO questions VALUES (201, 'Operations', 1, 'Fill in the blank for this print statement: _____("hello world")');
INSERT INTO answers (questionId, description, isCorrect) VALUES (201, 'print', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (201, 'show', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (201, 'echo', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (201, 'display', false);

-- Q2
INSERT INTO questions VALUES (202, 'Operations', 2, 'How can you increment the value of the variable x?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (202, 'x++', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (202, 'x =+ 1', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (202, 'x = x + 1', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (202, 'x = 1', false);

-- Q3
INSERT INTO questions VALUES (203, 'Operations', 3,'Which of these is not an operation?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (203, '%', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (203, '+', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (203, '-', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (203, '=', true);

-- Questions for Comments Section 3
-- Q1
INSERT INTO questions VALUES (301, 'Comments', 1, 'Which is a single line comment?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (301, '#this is a comment', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (301, ' """This is a comment""" ', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (301, '//this is a comment', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (301, '/*this is a comment*/', false);

-- Q2
INSERT INTO questions VALUES (302, 'Comments', 2, 'Which is a multi-line comment?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (302, '#this is a comment', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (302, ' """This is a comment""" ', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (302, '//this is a comment', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (302, '/*this is a comment*/', false);
-- Q3
INSERT INTO questions VALUES (303, 'Comments', 3, 'What is a comment?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (303, 'a way to talk about code to other programmers', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (303, 'a line of code that are not read by the machine in execution', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (303, 'a line of code that shows a statement on screen', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (303, 'a way to define a variable', false);

-- Questions for Loops Sections 5
-- Q1
INSERT INTO questions VALUES (501, 'Loops', 1, 'What are the types of loops in Python?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (501, 'FOR and WHILE', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (501, 'FOR, WHILE, and IF', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (501, 'WHILE and DO-WHILE ', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (501, 'IF AND ELSE', false);

-- Q2
INSERT INTO questions VALUES (502, 'Loops', 2, 'Which type of loop iterates until instructed otherwise?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (502, 'FOR loop', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (502, 'WHILE loop', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (502, 'Repeated loop', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (502, 'Count-controlled loop', false);

-- Q3
INSERT INTO questions VALUES (503, 'Loops', 3, 'Which type of loop continues until a boolean condition is met?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (503, 'WHILE loop', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (503, 'Boolean loop', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (503, 'Infinite loop', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (503, 'FOR loop', false);

-- Q4
INSERT INTO questions VALUES (504, 'Loops', 4, 'The condition for a while loop to iterate through a list includes: ');
INSERT INTO answers (questionId, description, isCorrect) VALUES (504, 'All of these', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (504, 'When something is True or False', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (504, 'When something is equal than something', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (504, 'When something is greater than something', false);

-- Questions for Functions Sections 6
-- Q1
INSERT INTO questions VALUES (601, 'Functions', 1, 'How do you define a function in Python?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (601, 'def myFunction():', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (601, 'public double myFunction() { }', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (601, 'myFunction() { }', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (601, 'def myFunction() { }', false);

-- Q2
INSERT INTO questions VALUES (602, 'Functions', 2, 'What does scope mean?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (602, 'Scope is what defines where a variable is usable in a Python script.', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (602, 'Scope is how you define a variable in Python.', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (602, 'Scope is how variables are shared between files in Python.', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (602, 'Scope is the type of variable in Python (i.e. int or string).', false);

-- Q3
INSERT INTO questions VALUES (603, 'Functions', 3,'How do you return multiple variables in Python?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (603, 'return (x, y, z)', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (603, 'return x , y, z', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (603, 'return x + y + z', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (603, 'return x; y; z;', false);

-- Q4
INSERT INTO questions VALUES (604, 'Functions', 4, 'How to call a function in Python?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (604, 'function', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (604, 'call function()', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (604, 'function myFunction = new function();', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (604, 'function()', true);

-- Q5
INSERT INTO questions VALUES (605, 'Functions', 5, 'How are variables passed to functions in Python?');
INSERT INTO answers (questionId, description, isCorrect) VALUES (605, 'variable = function()', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (605, 'function myfunction = new myfunction(variable)', false);
INSERT INTO answers (questionId, description, isCorrect) VALUES (605, 'function (variable)', true);
INSERT INTO answers (questionId, description, isCorrect) VALUES (605, 'call function (variable)', false);

-- Add the data, classes page -- id's are in the 600's for the questions
-- Q1
insert into questions(id, section, questionNumber, description) values
(701, 'Classes', 1, 'What\'s the difference between objects and classes?');
insert into answers(questionId, description, isCorrect) values
(701, 'Classes define the structure and behavior of objects, and objects have a memory location', true);
insert into answers(questionId, description, isCorrect) values
(701, 'Objects define the structure and behavior of classes, and classes have a memory location', false);
insert into answers(questionId, description, isCorrect) values
(701, 'Objects and classes are the same thing', false);
-- Q2
insert into questions(id, section, questionNumber, description) values
(702, 'Classes', 2, 'What\'s the name of the special function name that you define to create objects with parameters (example: Dog(\'name\'))?');
insert into answers(questionId, description, isCorrect) values
(702, '__init__', true);
insert into answers(questionId, description, isCorrect) values
(702, '__create__', false);
insert into answers(questionId, description, isCorrect) values
(702, 'init', false);
insert into answers(questionId, description, isCorrect) values
(702, 'Dog', false);
-- Q3
insert into questions(id, section, questionNumber, description) values
(703, 'Classes', 3, 'How would you create an instance of Dog, and assign it to the variable z?');
insert into answers(questionId, description, isCorrect) values
(703, 'z = Dog()', true);
insert into answers(questionId, description, isCorrect) values
(703, 'Dog z = new Dog()', false);
insert into answers(questionId, description, isCorrect) values
(703, 'var z = Dog()', false);
insert into answers(questionId, description, isCorrect) values
(703, 'z = new Dog()', false);
insert into answers(questionId, description, isCorrect) values
(703, 'z = Dog.create()', false);

-- if statement 
-- First Quiz
insert into questions(id, section, questionNumber, description) values
(401, 'Conditional Logic', 1, 'What does “<” means?');
insert into answers(questionId, description, isCorrect) values
(401, 'It explodes!', false);
insert into answers(questionId, description, isCorrect) values
(401, 'Less than', true);
insert into answers(questionId, description, isCorrect) values
(401, 'Large', false);

-- if statement 
-- Second Quiz
insert into questions(id, section, questionNumber, description) values
(402, 'Conditional Logic', 2, 'What is “==” in boolean operator?');
insert into answers(questionId, description, isCorrect) values
(402, 'Not equal', false);
insert into answers(questionId, description, isCorrect) values
(402, 'Less than or equal', false);
insert into answers(questionId, description, isCorrect) values
(402, 'Equal', true);

-- Modules
-- Q1
insert into questions(id, section, questionNumber, description) values (801, 'Modules', 1, 'What is it called when you bring in other code to be used in your file?');
insert into answers(questionId, description, isCorrect) values (801, 'import', true);
insert into answers(questionId, description, isCorrect) values (801, 'export', false);
insert into answers(questionId, description, isCorrect) values (801, 'extract', false);
insert into answers(questionId, description, isCorrect) values (801, 'use', false);

-- Q2
insert into questions(id, section, questionNumber, description) values (802, 'Modules', 2, 'How would we allow the module random’s class Random to be used directly in our file? (ex: x = Random())');
insert into answers(questionId, description, isCorrect) values (802, 'import random.Random', false);
insert into answers(questionId, description, isCorrect) values (802, 'from random import Random', true);
insert into answers(questionId, description, isCorrect) values (802, 'use Random from random', false);
