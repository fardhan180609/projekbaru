<!DOCTYPE html>
<html>
<head>
    <title>Hitung Kubus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>SELAMAT DATANG DI WEBSITE FARDHAN DARMAWAN S</header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="profil.html">Profil</a></li>
                <li><a href="medsos.html">Media Sosial</a></li>
                <li><a href="hitungkubus.php">Hitung Kubus</a></li>
            </ul>
        </nav>
        <main>
            <h2>Menghitung Volume Kubus</h2>
            <form method="post">
                <label>Masukkan panjang rusuk (cm):</label><br>
                <input type="number" name="rusuk" required><br><br>
                <button type="submit" name="hitung">Hitung</button>
            </form>
            <?php
            if(isset($_POST['hitung'])){
                $rusuk = $_POST['rusuk'];
                $volume = $rusuk * $rusuk * $rusuk;
                echo "<p>Volume kubus dengan rusuk $rusuk cm adalah <b>$volume cm³</b></p>";
            }
            ?>
        </main>
    </div>
    <footer>"beberapa orang menukar rasa sakitnya dengan sibuk naik gunung,meskipun itu sangat melelahkan"</footer>
</body>
</html>
