# Partiels-PHP-SQL

- Question 2_B

''sql

CREATE USER 'utilisateur'@'localhost' IDENTIFIED BY 'id';
''

- Question 3_B

''sql

SELECT * FROM `personnage`
INTERSECT
SELECT * FROM `voiture`
''

- Question 3_C:

''sql
SELECT * FROM `sport`
INTERSECT
SELECT * FROM `personnage`
''

- Question 4:
''sql
select * from sport
left join voiture
on sport.id=voiture.id
''
- Puis 

''sql
select id_concoursdemangeur , id_sous-marin
from sport
cross join voiture
''
