<!DOCTYPE html>
<html>
  <head>
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  </head>
  <body class="bg-neutral-800 text-white px-2">
  <?php include "includes/header.php";?>
    <h1 class="text-2xl text-center">Giriş Sayfası</h1>
    <div class="max-w-3xs mx-auto py-2"> 
    <form method="POST" action="login_process.php">
      <div class="grid grid-rows-3 text-center">
      <input name="email" type="email" class="border-2 border-gray-200 rounded-xl py-1 my-2" required placeholder="E-posta">
      <input name="password" type="password" class="border-2 border-gray-200 rounded-xl py-1 my-2" required placeholder="Şifre">
      <input type="submit" class="py-1 border-2 border-gray-200 rounded-xl my-2 w-max justify-self-center" value="Giriş Yap">
      </div> 
    </form> 
    </div>
  <?php include "includes/footer.php";?>
  </body>
</html>
