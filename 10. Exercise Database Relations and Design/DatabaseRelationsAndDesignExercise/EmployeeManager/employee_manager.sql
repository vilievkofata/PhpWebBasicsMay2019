SELECT employees.employee_id, employees.first_name, employees.manager_id, e.first_name
FROM employees
         JOIN employees AS e ON employees.manager_id = e.employee_id
WHERE employees.manager_id IN (3, 7)
ORDER BY employees.first_name;