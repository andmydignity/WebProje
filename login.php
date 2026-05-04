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
    <form method="POST" class="flex flex-col justify-self-center items-center space-y-2" action="login_process.php">
      <input name="email" type="email" class="border-2 border-gray-200 rounded-xl p-1" required placeholder="E-posta">
      <input name="password" type="password" class="border-2 border-gray-200 rounded-xl p-1" required placeholder="Şifre">
      <input type="submit" class="p-1 border-2 border-gray-200 rounded-xl w-max justify-self-center" value="Giriş Yap">
      </form> 
    </div>
  <?php include "includes/footer.php";?>
  </body>
</html>
