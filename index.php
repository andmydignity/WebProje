<!DOCTYPE html>
<html>
  <head>
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="bg-neutral-800 text-white">
    <?php include "includes/header.php";?>
    <div class="container mx-auto px-2">
      <h1 class="text-4xl text-center p-4">Tanıtım sayfama hoşgeldiniz!</h1>
      <div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:grid-rows-1 py-5">
        <div class="items-center">
          <section>
          <h2 class="text-3xl p-2 text-center">
            Ahmet Semih Aslan
          </h2>
          <article>
              <p>27 Kasım 2006'da Elazığ'da doğdum. Ömrümün 13 senesi Elazığ'da geçti, liseyi ise Bingöl'de okudum. Şuan ise Sakarya Üniversitesi'nde Bilgisayar Mühendisliğinde 1.Sınıf öğrencisiyim. Bunlar haricindede pekde bi olayım yok.</p>
              <h3 class="text-2xl py-2">İlgi Alanlarım</h3>
              <ul class="list-disc list-inside space-y-1" >
                <li>Yazılım (özellikle Backend/ML)</li>
                <li>Tarih</li>
                <li>3D yazıcılar</li>
                <li>Ekzantirik müzikler</li>
                <li>...?</li>
              </ul>
            </article>
        </section>
        </div>

        <div>
          <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNvZGFnZXxlbnwwfHwwfHx8MA%3D%3D" alt="Alakası olmamasına rağmen medya koşulunu sağlamak için yerleştirilmiş kod görseli." class="w-full rounded-2xl">
          <sub class="text-center">Medya koşulunu sağlamak için eklenmiş alakasız bilgisayar görseli.</sub>
        </div>
      </div>
      <div>
        <audio controls>
          <source src="https://mp3indirdur.life/rick-astley-never-gonna-give-you-up-130881?dinle=1">
        </audio>
      </div> 
    </div>

  
  <?php include "includes/footer.php";?>
  </body>
</html>
