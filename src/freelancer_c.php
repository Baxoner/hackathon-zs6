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
                    <a class="nav-link" href="freelancer_c.php">Dołącz Do Freelancerów</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biblioteka_fc.php">Biblioteka Fleelancerów</a>
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
                        <h4 class="card-header white-text blue">Dołącz do Freelancerów</h4>
                        <div class="card-body">
                            <form method="POST" action="freelancer_c.php" id="formularz2" onsubmit="return sprawdzEmail()" >
                                <div class="md-form">
                                    <input type="text" id="name2" name="name2" class="form-control" required="required" />
                                    <label for="name2">Imię</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="surname2" name="surname2" class="form-control" required="required" />
                                    <label for="surname2">Nazwisko</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="email2" name="email2" class="form-control" required="required" />
                                    <label for="email2">Adres e-mail</label>
                                </div>
                                <div class="md-form">

                                 
                                </div>
                                
                                <div class="md-form">
                                    <input type="text" id="class2" name="class2" class="form-control" required="required" />
                                    <label for="class2">Twoja Klasa</label>
                                </div>
                                
                                <div class="md-form">
                                <select name="list_1" size="8" multiple="multiple" class="form-control" required="required"> 
<optgroup label="Grafika">
<option>Ulotki/Plakaty</option>
<option>Loga</option>
</optgroup>
<optgroup label="Programowanie">
<option>C++</option>
<option>C#</option>
<option>JavaScript</option>
</optgroup>
<optgroup label="Tworzenie stron www i bazy danych">
<option>HTML</option>
<option>CSS</option>
<option>MySQL</option>
<option>PHP</option>
</optgroup>
<optgroup label="Wideo i Audio">
<option>Montaż wideo</option>
<option>Obróbka audio</option>
</optgroup>
<optgroup label="Pomoc Techniczna">
<option>Obsługa sprzętu szkolnego</option>
</optgroup>
<optgroup label="Muzyka">
<option>Gra na pianinie</option>
<option>Gra na gitarze</option>
<option>Gra na perkusji</option>
<option>Śpiew</option>
<option>Gra na innym instrumencie</option>
</optgroup>
</select>

</div>

<div class="d-flex justify-content-around">
                                    <input type="submit" class="btn blue white-text" value="Zapisz się" />
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