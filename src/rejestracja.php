<?php
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['description']) && isset($_POST['email']))
{
    include "db_connection.php";
    $conn = OpenCon();
    // Don't forget to properly escape your values before you send them to DB
    // to prevent SQL injection attacks.
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    
    
    $query = "INSERT INTO posty (name, surname, email, description,title)
                VALUES ('{$name}','{$surname}','{$email}','{$description}','{$title}')";
    
    $conn->query($query);
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">

    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">    
    </script>
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">    
    </script>
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">    
    </script>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="script.js"></script>
	<meta name="author" content="Gracjan Karpiński, Bartosz Ratajczyk"/>
	<meta name = "robots" content="all"/>
    
    

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
            <a class="nav-link" href="freelancer_c.php">Dołącz Do Freelancerów</a>
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
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <h4 class="card-header white-text blue">Dodaj post</h4>                        
                    <div class="card-body">
                        <form method="POST" action="rejestracja.php" id="formularz" onsubmit="return sprawdzEmail()">
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control" required="required" maxlength="15"/>
                                <label for="imie">Imię</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="surname" name="surname" class="form-control" required="required" maxlength="30"/>
                                <label for="surname">Nazwisko</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="email" name="email" class="form-control" required="required"/>
                                <label for="email">Adres e-mail</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="title" name="title" class="form-control" required="required" maxlength="75"/>
                                <label for="title">Tytuł Posta</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="description" name="description" class="form-control" required="required"/>
                                <label for="tresc">Treść posta</label>
                            </div>
                            <div class="d-flex justify-content-around">
                                <input type="submit"
                                    class="btn blue white-text" value="Opublikuj post!"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>