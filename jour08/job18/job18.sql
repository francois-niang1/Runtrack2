SELECT max(capacite), salles.nom, etage.nom AS 'Biggest Room'
from etage 
inner join salles on etage.id = salles.id_etage 
