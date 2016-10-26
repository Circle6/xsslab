<!DOCTYPE html>
<html>
  <head>
    <style>
    </style>
  </head>
  <body>
    <form action="xss.php" method="post">
      <input type="text" name="comment" value="">
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
      session_start();

      echo $_POST["comment"]
    ?>
  </body>
</html>
