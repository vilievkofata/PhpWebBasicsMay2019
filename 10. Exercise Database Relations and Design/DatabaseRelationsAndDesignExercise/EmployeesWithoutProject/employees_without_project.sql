SELECT employees.employee_id, first_name
FROM employees
         LEFT JOIN employees_projects ON employees.employee_id = employees_projects.employee_id
WHERE employees_projects.project_id IS NULL
ORDER BY employees.employee_id DESC
LIMIT 3;