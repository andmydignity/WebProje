<!DOCTYPE html>
<html>
  <head>
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  </head>
  <body class="bg-neutral-800 text-white px-2">
    <?php include "includes/header.php";?>
    <div class="text-center">
      <h1 class="text-2xl">Giriş Sonucu</h1>
      <?php
      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      if ($email == "b251210042@sakarya.edu.tr" && $password == "b251210042") {
        echo "Hoş geldiniz b251210042";
      }
      else{
        echo "Hatalı giriş bilgileri, geri yönlendiriliyorsunuz.";
        header("Refresh: 3; url=login.php");
        die();
      }
      ?>
      <?php include "includes/footer.php";?>
    </div>

  
  </body>
</html>


