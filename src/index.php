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
 
                    <div class="card-body">
                      <h4 class="card-title"><a>Lista Postów</a></h4>
                    </div>
                   
                  </div> 
                  
            </div>
            
        </div>
        
                
        <?php include "get.php"; ?>
        

    </div>

</main>
</body>
</html>