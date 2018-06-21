<!DOCTYPE html>
<html>
  <head>
    <title>php test</title>
  </head>
  <body>
  <?php
  $empf = "ludwig_felix@web.de";
  $betreff = "testbetreff";
  $from = "From: testname <test@test.de>\n";
  $from .= "Content-Type: text/html\n";
  $text = "Testnachricht bla bla";

  mail($empf, $betreff, $text, $from);
  echo("Vielen Dank");


  ?>
  </body>
</html>
