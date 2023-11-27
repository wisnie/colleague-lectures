<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'pilkarz1');

$get_matches = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'";
$matches = $mysqli->query($get_matches)->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>

<body>
    <header>
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>
    <!-- Meczyki -->
    <section>
        <article>

        </article>
    </section>
    <main>
        <h2>Reprezentacja Polski</h2>
    </main>
    <div class="blocks-container">
        <section class="left-block">
            <p>Podaj pozycje zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
            <form method="post" action="futbol.php">
                <input type="number" name="player-type">
                <button type="submit">Sprawdź</button>
            </form>
            <!-- Skrypt 2 -->
        </section>
        <section class="right-block">
            <img src="zad2.png" alt="piłkarz">
            <p>Autor: 00000000000</p>
        </section>
    </div>
</body>

</html>