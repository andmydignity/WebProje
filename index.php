<?php
// API'den JSON verisi çekme işlemi
$apiUrl = "https://api.thecatapi.com/v1/images/search";
$response = @file_get_contents($apiUrl);
$catImageUrl = "https://cataas.com/cat"; // API başarısız olursa yedek görsel

if ($response) {
    $data = json_decode($response, true);
    if (!empty($data) && isset($data[0]['url'])) {
        $catImageUrl = $data[0]['url'];
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ana Sayfa</title>
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
          <h2 class="text-3xl font-bold p-2 text-center">
            Ahmet Semih Aslan
          </h2>
          <article>
              <p>27 Kasım 2006'da Elazığ'da doğdum. Ömrümün 13 senesi Elazığ'da geçti, liseyi ise Bingöl'de okudum. Şuan ise Sakarya Üniversitesi'nde Bilgisayar Mühendisliğinde 1.Sınıf öğrencisiyim. Bunlar haricindede pekde bi olayım yok.</p>
              <h3 class="text-2xl py-2">İlgi Alanlarım</h3>
              <ul class="list-disc list-inside space-y-1" >
                <li>Yazılım (özellikle Backend/ML)</li>
                <li>Tarih</li>
                <li>3D yazıcılar</li>
                <li>Ekzantirik müzikler (Özellikle <a href="https://tr.wikipedia.org/wiki/Breakcore">Breakcore</a> ve <a href="https://tr.wikipedia.org/wiki/Chiptune">Chiptune</a>)</li>
              </ul>
            </article>
        </section>
        </div>

        <div class="w-full flex flex-col items-center justify-center">
          <img src="<?php echo htmlspecialchars($catImageUrl); ?>" alt="Rastgele kedi fotoğrafı." class=" max-h-96 rounded-2xl w-auto object-contain">
          <sub class="text-center mt-2">Rastgele bir kedi fotoğrafı.</sub>
        </div>
      </div>
       
    </div>

  
  <?php include "includes/footer.php";?>
  </body>
</html>
