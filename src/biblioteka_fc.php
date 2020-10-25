<?php
include "db_connection.php";
$conn = OpenCon();

$name2 = $_POST['name2'];
$surname2 = $_POST['surname2'];
$email2 = $_POST['email2'];
$perks2 = $_POST['perks2'];
$class2 = $_POST['class2'];


$query = "INSERT INTO freelancers (name2, surname2, email2, class2, perks2)
            VALUES ('{$name2}','{$surname2}','{$email2}','{$class2}','{$perks2}')";

$conn->query($query);
$conn->close();

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
        </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="script.js"></script>
    <meta name="author" content="Gracjan Karpiński, Bartosz Ratajczyk" />
    <meta name="robots" content="all" />



</head>

<body>
    <header>
        <nav class="navbar blue navbar-dark navbar-expand-md">
            <a class="navbar-brand" href="index.php">
                Zbiór Freelancerów Sobiecha
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rejestracja.php">Stwórz post</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="freelancer_c.html">Dołącz Do Freelancerów</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biblioteka_fc.html">Biblioteka Fleelancerów</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.html">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            
        <?php include "get_fl.php"; ?>
                    </div>
    </main>
</body>

</html>