<!DOCTYPE html>
<html>
<?php
include('meta.php');

?>
  <body>
    <div class="wrap">
        <?php
            include('header.php');
        ?>
   
    <div class="inhalt"><p><h3>Hier kannst du Kontakt mit mir aufnehmen!</h3>
        Hier entsteht ein Kontaktformular.
    </p>
    <div class="inhaltboxen">
        <div class="box">
        <form method="post" action="send_email.php">
        <label for="Name"><b>Name:</b></label><br>
        <input type="text" id="Name" name="Name"><br><br>
        
        <label for="Email"><b>E-Mail:</b></label><br>
        <input type="text" id="Email" name="Email"><br><br>
        
        <label for="Betreff"><b>Betreff:</b></label><br>
        <input type="text" id="Betreff" name="Betreff"><br><br>
        
        <label for="Nachricht"><b>Nachricht:</b></label><br>
        <textarea id="Nachricht" name="Nachricht" rows="10" cols="50"></textarea> <br><br>
        
        <input type="submit" name="submit">
        </form>
        </div>
      
      
    </div>
  
  </div>
  <?php
  include('footer.php');
  include('script.php');
  ?>
  </div>


  </body>
</html>