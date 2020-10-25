<?php
include "db_connection2.php";
$conn = OpenCon();



$query = "SELECT * FROM freelancers";

$result = $conn->query($query);


while ($post = $result->fetch_assoc()): 
?>

<div class="row">

<div class="col-md">
    <div class="card">
 
                    <div class="card-body">
                      <h4 class="card-title"><a><?php echo $post['name2'] ?> <?php echo $post['surname2']?> </a></h4>
                      <p class="card-text">Klasa: <?php echo $post['class2'] ?> <br> Umiejętności: <?php echo $post['perks2'] ?>  
                      <br> email: <?php echo $post['email2'] ?>
</p>
                      <!--<a href="#" class="btn btn-primary">Zgłoś się</a> a-->
                    </div>
                   
                  </div> 
      
</div>

</div>

<?php endwhile;
$conn->close(); ?>