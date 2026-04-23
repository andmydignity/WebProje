<!DOCTYPE html>
<html>
  <head>
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script>
    let currentIndex = 0;
    const totalSlides = 4; // En az 4 resim şartı

    function updateSlider() {
      const slider = document.getElementById('slider');
      // Her resim %100 genişlikte olduğu için index * 100 kadar kaydırıyoruz
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlider();
    }

    // Opsiyonel: 5 saniyede bir otomatik dönsün
    setInterval(nextSlide, 5000);
    </script>
  </head>
  <body class="bg-neutral-800 text-white">
  <?php include "includes/header.php";?>
  <div class="container mx-auto p-2">
      <div class=" py-5 grid grid-cols-1 md:grid-cols-2 md:grid-rows-1">
        <section>
          <h2 class="text-3xl text-center">Elazığ</h2>
          <article class="py-3">
            Memleketim olan Elazığ; Doğu Anadolu'da Tunceli, Malatya, Diyarbakır ve Bingöl ile sınır komşusudur. İl nüfüsü Şubat 2026 verilerine göre 605.786, şehir merkezi nüfüsu ise 463.686'dır.
            Eski adları Harput, Elaziz ve Ma'mûretü'l-Azîz'dir. 1517'de Diyarbakır'a bağlı sancak, 1846'da eyalet , 1864'de vilayet olmuştur.
            1834 itibaren, Harput'un dağlık yapısı nedeniyle şehir ovaya kaymaya başlamıştır.
          </article>
          <div class="grid grid-cols-1 md:grid-cols-2 md:grid-rows-1">
            <div>
              <h3 class="text-2xl py-2">Gezilecek Yerler</h3>
              <ul class="list-disc list-inside space-y-1" >
                <li>Harput Kalesi</li>
                <li>İzzetpaşa Camii <sup class="underline" title="Türkiye'nin ilk asönsörlü camiisi">*</sup></li>
                <li>Kapalı Çarsı</li>
                <li>Harput Ulucami</li>
                <li>Karaleylek Kanyonu<sup class="underline" title="Yeni keşfedilen, pek bilinmeyen kara leyleklerin bulunduğu çok güzel bir kanyon. Ama ulaşımı çok zor olduğu için gözden geçirin.">*</sup></li>
                <li>Hazar Gölü</li>
                <li>Palu Kalesi</li>
                <li>Hazarbaba Kayak Merkezi</li>
                <li>Keban Barajı</li>

              </ul>
            </div>
            <div>
              <h3 class="text-2xl py-2">Meşhur Şeyleri</h3>
              <ul class="list-disc list-inside space-y-1" >
                <li>Orcik (Cevizli Sucuk)</li>
                <li>Şekerli Peynirli Pide<sup class="underline" title="İnanılmaz derecede şekerlidir, haberiniz olsun" >*</sup></li>
                <li>Ağın leblebisi</li>
                <li>Elazığ usulu ekmek arası köfte<sup class="underline" title="En iyileri Köfteciler Sokağındadır">*</sup></li>
                <li>Harput Köftesi</li>
                <li>Çedene Kahvesi</li>
                <li>Öküzgözü üzümü ve şarabı</li>
                <li>Ters lale</li>
                <li>Vişne Mermeri</li>
              </ul>
            </div> 
          </div>

        </section> 
        <div>
        <img class="h-full" src="https://media.istockphoto.com/id/474221694/tr/foto%C4%9Fraf/city-lights.jpg?s=612x612&w=0&k=20&c=lDpGFlUUNn0M8xZxOhcx770aiAQFmY19UAzmtqjFFGY=" title="">
        <sub class="self-center">Şehir sadece karanlıkta güzel gözüküyor maalesef.</sub>
        </div>
        <section class="container mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-center mb-8">Şehrimden Kareler</h2>
    
    <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-2xl shadow-2xl">
        <div id="slider" class="flex transition-transform duration-500 ease-in-out">
            <img src="resim1.jpg" class="w-full shrink-0 aspect-video object-cover" alt="Şehir 1">
            <img src="resim2.jpg" class="w-full shrink-0 aspect-video object-cover" alt="Şehir 2">
            <img src="resim3.jpg" class="w-full shrink-0 aspect-video object-cover" alt="Şehir 3">
            <img src="resim4.jpg" class="w-full shrink-0 aspect-video object-cover" alt="Şehir 4">
        </div>

        <button onclick="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 p-3 rounded-full hover:bg-black/80">❮</button>
        <button onclick="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 p-3 rounded-full hover:bg-black/80">❯</button>
    </div>
</section>
        </div>
  </div>

  
  <?php include "includes/footer.php";?>
  </body>
</html>
