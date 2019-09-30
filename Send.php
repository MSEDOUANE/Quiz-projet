    
        <?php

  include 'connection.php';

      echo "string";
      $name = $_POST['name'];
      $message = $_POST['message'];
      $query = "INSERT INTO chat (name, message) VALUES ('$name','$message')";
         echo $query;
      $run = mysqli_query($con,$query);
  echo "req";
  if (!$run )
{
 echo("Error description: " . mysqli_error($con));
}

      if($run){
        ?>
        <audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
        <?php
      }
    
  ?>