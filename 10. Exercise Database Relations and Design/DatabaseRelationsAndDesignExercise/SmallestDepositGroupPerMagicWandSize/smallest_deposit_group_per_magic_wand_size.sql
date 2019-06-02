SELECT deposit_group
FROM wizzard_deposits
GROUP BY deposit_group
ORDER BY (SELECT MIN((SELECT AVG(magic_wand_size) FROM wizzard_deposits)) FROM wizzard_deposits)
LIMIT 1;