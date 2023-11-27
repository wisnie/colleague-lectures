SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG';

SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = 3;

SELECT z.id, z.nazwisko, p.nazwa FROM zawodnik z INNER JOIN pozycja p ON p.id
 =  z.pozycja_id WHERE z.id IN (1,2,3);

DROP TABLE liga;