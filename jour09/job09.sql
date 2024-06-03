SELECT *
FROM etudiants
WHERE YEAR(CURDATE()) - YEAR(naissance) - (RIGHT(CURDATE(), 5) < RIGHT(naissance, 5)) < 18;
