<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="naglowek">
        <div id="logo">
        </div>
        <div id="baner">
        </div>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <td>Interpretacja BMI</td>
                <td>Wartość minimalna</td>
                <td>Wartość maksymalna</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div id="podzial">
        <div id="lewy"><h2>Podaj wagę i wzrost</h2>
            <form action="bmi.php" method="post">
                Waga:<input type="numer" min="1" name="waga">
                wzrost w cm:<input type="number" min="1">
            <button type="submit">Oblicz i zapamiętaj wynik</button>
            </form>
        </div>
        <div id="prawy"><img src="rys1.png" alt="ćwiczenia"></div>
    </div>
    <div id="stopka">
    Autor: 02312708894 <a href="kwerendy.txt">Zobacz kwerendy</a></div>
</body>
</html>