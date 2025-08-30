-- Q10: Employees with salary greater than 10,000
SELECT * FROM Employees WHERE salary > 10000;

-- Q11: Employees hired between 01-Jan-2005 and 31-Dec-2007
SELECT * FROM Employees WHERE hire_date 
BETWEEN TO_DATE('2005-01-01', 'YYYY-MM-DD') 
AND TO_DATE('2007-12-31', 'YYYY-MM-DD');

-- Q12: Employees in department 50 or 80
SELECT * FROM Employees WHERE department_id IN (50, 80);

-- Q13: Employees whose last name starts with ‘S’
SELECT * FROM Employees WHERE last_name LIKE 'S%';

-- Q14: Employees with no manager assigned
SELECT * FROM Employees WHERE manager_id IS NULL;

-- Q15: Employees with salary > 5000 and department 90
SELECT * FROM Employees WHERE salary > 5000 AND department_id = 90;

-- Q16: Employees in department 50 or with a commission percentage
SELECT first_name, last_name, department_id, commission_pct FROM Employees
WHERE department_id = 50 OR commission_pct IS NOT NULL;

-- Q17: Employees not in department 60
SELECT * FROM Employees WHERE department_id <> 60;
