<!DOCTYPE html>
<html>
  <head>
    <title>İletişim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-neutral-800 text-white">
   <?php include "includes/header.php";?>
   <div class="container mx-auto text-center">
  <?php
    $tur = htmlspecialchars($_POST['tur']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $mesaj = htmlspecialchars($_POST['mesaj']);
    $onay = htmlspecialchars($_POST['onay']);
    $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
    echo "Mesaj Türü: " . $tur . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefon: " . $tel . "<br>";
    echo "Mesaj: " . $mesaj . "<br>";
    echo "Cinsiyet: " . $cinsiyet . "<br>";

    ?>

   </div>
  </body>
</html>
