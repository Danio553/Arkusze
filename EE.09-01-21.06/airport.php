<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Odloty Samolotów</title>
</head>
<body>
            <div id="banerlewy">
                <h2>Odloty z Lotniska</h2>
            </div>
            <div id="banerprawy">
                <img src="zad6.png" alt="logotyp">
            </div>
    <main>
            <div id="blokglowny">
            <h4>TABELA ODLOTÓW</h4>
            <table>
                <tr>
                    <td>lp.</td>
                    <td>Numer rejsu</td>
                    <td>Czas</td>
                    <td>Kierunek</td>
                    <td>Status</td>
                </tr>

                <?php
                        $db = new mysqli('localhost','root','','egzamin99');
                        $query = "SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM `odloty` ORDER BY czas DESC";
                        $result = $db ->query($query);
                        while ($row = $result->fetch_assoc()){
                            $lp = $row['id'];
                            $numerRejsu = $row['nr_rejsu'];
                            $czas = $row['czas'];
                            $kierunek = $row['kierunek'];
                            $statusLotu = $row['status_lotu'];
                            echo "<tr>";
                            echo "  <td>";
                            echo "      $lp";
                            echo "  </td>";
                            echo "  <td>";
                            echo "      $numerRejsu";
                            echo "  </td>";
                            echo "  <td>";
                            echo "      $czas";
                            echo "  </td>";
                            echo "  <td>";
                            echo "      $kierunek";
                            echo "  </td>";
                            echo "  <td>";
                            echo "      $statusLotu";
                            echo "  </td>";
                            echo "</tr>";
                        }
                        $db->close();
                ?>


            </table>        
        </div>
    </main>

            <div id="stopka1">
                <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
            </div>
            <div id="stopka2">
            <?php
            if(!isset($_COOKIE['cookie'])){
                setcookie("cookie", 1, time()+3600);
                echo "<p style=\"font-style: italic;\">Dzień dobry! Sprawdź regulamin strony</p>";
            }else{
                echo "<p style=\"font-weight: bold;\">Miło nam, że nas znowu odwiedziłeś</p>";
            }
        
            ?>
            </div>
            <div id="stopka3">
                Autor: 02312708894
            </div>




</body>
</html>