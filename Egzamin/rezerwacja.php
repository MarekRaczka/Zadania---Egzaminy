<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
    <link href="styl_1.css" rel="stylesheet">
</head>

<body>
    
<header>
    <div class="baner">
        <h1>Witamy w Restauracji "Wszystkie Smaki"</h1>
    </div>
</header>

<main>

    <div class="flex-main">
        
    <div class="left">
        <img src="" alt="Nasze Danie" class="image">
    </div>

    <div class="right">
        <h4>U nas dobrze zjesz!</h4>
        <ol>
            <li>Obiady od 40zł</li>
            <li>Przekąski od 10zł</li>
            <li>Kolacje od 20zł</li>
        </ol>
    </div>

    </div>

    <div class="bottom">
        <?php

            $date = $_POST['date'];
            $person = $_POST['person'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO rezerwacje (nr_stolika, data_rez, liczba_osob, telefon) VALUES(NULL, '$date', '$person', '$phone' )";

            try{
                $conn = new PDO("mysql:host=localhost; dbname=baza", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            catch(PDOException $e){
                echo "Connected failed: " .$e->getMessage();
            }


            $query = $conn->exec($sql);

            if($query == true)
            echo "<div class="."alarm"."><p>Dodano rezerwacje do bazy</p></div>";

            else throw new Exception("Can't do query");

        ?>
    </div>

</main>

<footer>
    <div class="footer">
        <p>Stronę internetową opracował: <i>00000000000</i></p>
    </div>
</footer>

</body>

</html>