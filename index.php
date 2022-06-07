<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $my_text = "Trentatre trentini entrarono in Trento tutti e trentatre trotterellando";
  $my_text_length = strlen($my_text);
  ?>

  <h2>Questo è il testo</h2>
  <p>
    <?php 
    echo $my_text;
    ?>
  </p>

  <h2>Questo è la lunghezza del testo</h2>
  <p>
    Il testo contiene <?php echo $my_text_length; ?> caratteri.
  </p>

</body>
</html>