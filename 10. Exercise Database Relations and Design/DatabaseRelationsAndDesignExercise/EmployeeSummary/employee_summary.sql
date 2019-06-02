SELECT employees.employee_id,
       CONCAT(employees.first_name, ' ', employees.last_name) AS employee_name,
       CONCAT(e.first_name, ' ', e.last_name)                 AS manager_name,
       departments.name
FROM employees
         JOIN employees AS e ON employees.manager_id = e.employee_id
         JOIN departments ON employees.department_id = departments.department_id
ORDER BY employees.employee_id
LIMIT 5;