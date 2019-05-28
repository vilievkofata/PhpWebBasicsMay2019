UPDATE employees
SET salary = salary + salary * 12 / 100
WHERE department_id IN (1, 2, 4, 11);
SELECT salary AS Salary
FROM employees;