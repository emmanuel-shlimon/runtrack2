SELECT salles.nom AS salle_nom, etages.nom AS etage_nom
FROM salles
JOIN etages ON salles.id_etage = etages.id;
