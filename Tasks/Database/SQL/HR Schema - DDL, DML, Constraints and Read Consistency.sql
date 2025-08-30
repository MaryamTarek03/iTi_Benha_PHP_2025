-- Q1: Insert a new employee into the employees table with sample data.
INSERT INTO Employees (employee_id, first_name, last_name, email, hire_date, job_id, salary, department_id)
VALUES (999, 'Maryam', 'Tarek', 'maryam@gmail.com', SYSDATE, 'IT_PROG', 8000, 60);

-- Q2: Insert multiple rows at once into a table
INSERT ALL
  INTO Employees (employee_id, first_name, last_name, email, hire_date, job_id, salary, department_id)
    VALUES (1001, 'Sara', 'Youssef', 'sara@gmail.com', SYSDATE, 'SA_REP', 7000, 80)
  INTO Employees (employee_id, first_name, last_name, email, hire_date, job_id, salary, department_id)
    VALUES (1002, 'Omar', 'Nabil', 'omar@gmail.com', SYSDATE, 'HR_REP', 6500, 40)
SELECT * FROM dual;

-- Q3: Update the salary of employee Steven King to 30000.
UPDATE Employees
SET salary = 30000
WHERE first_name = 'Steven' AND last_name = 'King';

-- Q4: Increase salaries of all employees in department 90 by 10%.
UPDATE Employees
SET salary = salary * 1.1
WHERE department_id = 90;

-- Q5: Delete employees who do not belong to any department.
DELETE FROM Employees
WHERE department_id IS NULL;

-- Q6: Delete all rows from the job_history table.
DELETE FROM Job_History;

-- Q7: Demonstrate read consistency: run a SELECT while another session updates data.
SELECT * FROM Employees WHERE department_id = 90;

-- Q8: Use SELECT … FOR UPDATE to lock rows of employees in department 100.
SELECT * FROM Employees WHERE department_id = 100 FOR UPDATE;

-- Q9: List Oracle rules for naming database objects.
-- 1. Must begin with a letter.
-- 2. Can contain letters, numbers, and special characters (_).
-- 3. Must be between 1 and 30 characters long.
-- 4. Not case-sensitive.

-- Q10: Create a new table test_dept with columns dept_id, dept_name, and location (with constraints).
CREATE TABLE test_dept (
    dept_id NUMBER(5) PRIMARY KEY,
    dept_name VARCHAR2(100) NOT NULL,
    location VARCHAR2(100) NOT NULL
);

-- Q11: Create a table emp_copy with the same structure as employees but without data.
CREATE TABLE emp_copy AS SELECT * FROM Employees WHERE 1=0;

-- Q12: Create a table emp_data with default value SYSDATE for hire_date.
CREATE TABLE emp_data (
    employee_id NUMBER(6) PRIMARY KEY,
    first_name VARCHAR2(20),
    last_name VARCHAR2(25),
    email VARCHAR2(25),
    hire_date DATE DEFAULT SYSDATE,
    job_id VARCHAR2(10),
    salary NUMBER(8, 2),
    department_id NUMBER(4)
);

-- Q13: Demonstrate different Oracle data types (VARCHAR2, NUMBER, DATE).
CREATE TABLE employee_types (
    emp_id NUMBER(6) PRIMARY KEY, -- a number
    emp_name VARCHAR2(50), -- a variable-length string
    emp_salary NUMBER(8, 2), -- a number with precision and scale
    emp_hire_date DATE -- a date
);

-- Q14: Add a NOT NULL and CHECK constraint to a column.
ALTER TABLE Employees
MODIFY salary NUMBER(8,2) CONSTRAINT salary_not_null NOT NULL;

ALTER TABLE Employees
ADD CONSTRAINT salary_check CHECK (salary >= 0);

-- Q15: Create a table with PRIMARY KEY and FOREIGN KEY.
CREATE TABLE department_types (
    dept_id NUMBER(5) PRIMARY KEY, -- primary key
    dept_name VARCHAR2(100) NOT NULL,
    location VARCHAR2(100) NOT NULL
);

CREATE TABLE employee_departments (
    emp_id NUMBER(6) REFERENCES employee_types(emp_id), -- foreign key
    dept_id NUMBER(5) REFERENCES department_types(dept_id)
);

-- Q16: Create a table using a subquery to copy employees with salary > 10000.
CREATE TABLE high_salary_employees AS
SELECT * FROM Employees WHERE salary > 10000;

-- Q17: Alter a table to add a new column email.
ALTER TABLE Employees
ADD email VARCHAR2(100);

-- Q18: Alter a table to make it read-only.
ALTER TABLE Employees
READ ONLY;

-- Q19: Drop the emp_copy table.
DROP TABLE emp_copy;