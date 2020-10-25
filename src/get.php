<?php
include "db_connection.php";
$conn = OpenCon();



$query = "SELECT * FROM posty";

$result = $conn->query($query);


while ($post = $result->fetch_assoc()): 
?>

<div class="row">

<div class="col-md">
    <div class="card">
 
                    <div class="card-body">
                      <h4 class="card-title"><a><?php echo $post['title'] ?></a></h4>
                      <p class="card-text"><?php echo $post['description'] ?><br>
                      </p>
                      <p class="card-text">Dane twórcy posta: <br> Imie: <?php echo $post['name'] ?> <br> Nazwisko: <?php echo $post['surname'] ?> <br> E-mail: <?php echo $post['email'] ?></p>
                      <!--<a href="#" class="btn btn-primary">Zgłoś się</a> a-->
                    </div>
                   
                  </div> 
      
</div>

</div>

<?php endwhile;
$conn->close(); ?>