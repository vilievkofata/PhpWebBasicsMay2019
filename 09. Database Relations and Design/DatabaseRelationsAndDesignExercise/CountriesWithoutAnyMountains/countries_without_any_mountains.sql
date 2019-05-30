SELECT COUNT(*) AS country_count
FROM countries
         LEFT JOIN mountains_countries ON countries.country_code = mountains_countries.country_code
WHERE mountains_countries.mountain_id IS NULL;