<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>

    <div class="lewa">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>

    <div class="prawa">
        <h1>KALENDARZ</h1>
        <p>miesiąc: lipiec, rok:2020</p>
    </div>
    <main>

        <?php
        
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'egzamin5'
        );

        $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];

            echo '<div>';
            echo "<h5>$data, $miesiac</h5>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }

        mysqli_close($conn)
        ?>
    </main>

    <?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'egzamin5'
);

    if (isset($_POST['wydarzenie'])) {
        
        $wydarzenie = $_POST['wydarzenie'];
        $qr = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
        $conn->query($qr);
        $conn->close();
    }
    ?>

    <footer>
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis:<input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></label>
            <br>
            <br>
            <p>Stronę wykonał: 02312708894</p>
        </form>
    </footer>

</body>

</html>

