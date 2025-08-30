-- Q1: Display the structure of the EMPLOYEES table
DESC Employees;

-- Q2: Display all columns from the DEPARTMENTS table
SELECT * FROM Departments;

-- Q3: Display the first_name, last_name, and salary of all employees
SELECT first_name, last_name, salary FROM Employees;

-- Q4: Show each employee’s name, salary, and annual salary (salary * 12)
SELECT first_name, last_name, salary, salary * 12 AS annual_salary FROM Employees;

-- Q5: Show each employee’s name and total pay including commission
SELECT first_name, last_name, salary + NVL(commission_pct, 0) * salary AS total_pay FROM Employees; -- NVL(commission_pct, 0) replaces NULL with 0.

-- Q6: Show employee names as “Full Name” and salary as “Monthly Salary”
SELECT first_name || ' ' || last_name AS "Full Name", salary AS "Monthly Salary" FROM Employees;

-- Q7: Display each employee’s name with a message like: Smith earns 6000
SELECT first_name || ' ' || last_name || ' earns ' || salary AS employee_message FROM Employees;

-- Q8: Use the alternative quote operator to display a string with a single quote
SELECT q'[It's a great day!]' AS message FROM dual;

-- Q9: Display all unique job IDs in the EMPLOYEES table
SELECT DISTINCT job_id FROM Employees;
