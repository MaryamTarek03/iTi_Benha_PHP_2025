-- Q1: Display employee names in uppercase
SELECT UPPER(first_name || ' ' || last_name) AS full_name FROM Employees;

-- Q2: Show employee names in lowercase
SELECT LOWER(first_name || ' ' || last_name) AS full_name FROM Employees;

-- Q3: Display first three letters of each employee’s first name
SELECT SUBSTR(first_name, 1, 3) AS first_three_letters FROM Employees;

-- Q4: Show employee last names with length of the name
SELECT last_name, LENGTH(last_name) AS name_length FROM Employees;

-- Q5: Display each employee’s salary rounded to the nearest thousand
SELECT ROUND(salary, -3) AS rounded_salary FROM Employees;

-- Q6: Show employee salary truncated to the nearest hundred
SELECT TRUNC(salary, -2) AS truncated_salary FROM Employees;

-- Q7: Display salary and its modulus with 1000
SELECT salary, MOD(salary, 1000) AS salary_modulus FROM Employees;

-- Q8: Display employee name and hire date
SELECT first_name || ' ' || last_name AS full_name, hire_date FROM Employees;

-- Q9: Show number of years each employee has worked
SELECT first_name || ' ' || last_name AS full_name,
       EXTRACT(YEAR FROM SYSDATE) - EXTRACT(YEAR FROM hire_date) AS years_worked
FROM Employees;

-- Q10: Display employees hired in the month of June
SELECT first_name || ' ' || last_name AS full_name, hire_date
FROM Employees
WHERE EXTRACT(MONTH FROM hire_date) = 6;

-- Q11: Show today’s date and the date 30 days from now
SELECT SYSDATE AS today_date, SYSDATE + INTERVAL '30' DAY AS date_30_days_later FROM dual;

-- Q16: Display employee names in proper case using nested functions
SELECT INITCAP(LOWER(first_name || ' ' || last_name)) AS proper_name
FROM Employees;

-- Q17: Display employee name and length of name only if the name starts with ‘A’
SELECT first_name || ' ' || last_name AS full_name,
       LENGTH(first_name || ' ' || last_name) AS name_length
FROM Employees
WHERE first_name LIKE 'A%';

-- Q18: Display employee name and commission; if commission is NULL, display 0
SELECT first_name || ' ' || last_name AS full_name,
       NVL(commission_pct, 0) AS commission
FROM Employees;

-- Q20: Display total salary (salary + commission if exists, else salary only)
SELECT first_name || ' ' || last_name AS full_name,
       salary + NVL(commission_pct, 0) AS total_salary
FROM Employees;