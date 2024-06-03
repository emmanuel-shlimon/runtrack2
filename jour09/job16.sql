SELECT etages.nom AS etage_nom, salles.nom AS 'Biggest Room', salles.capacite
FROM salles
JOIN etages ON salles.id_etage = etages.id
ORDER BY salles.capacite DESC
LIMIT 1;
