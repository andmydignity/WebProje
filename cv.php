<!DOCTYPE html>
<html>
  <head>
    <title>Özgeçmiş</title>
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="bg-neutral-800 text-white">
    <?php include "includes/header.php";?>
    <div class="container mx-auto px-2">
      <header>
        <h1 class="text-3xl font-bold p-4 text-center">Özgeçmiş</h1>
      </header>
      <hr>
      <section class="text-center py-2">
        
        <h2 class="text-2xl py-2">Profil</h2>
        <article class="italic text-justify"><p>Arka uç geliştirme sürecine dair pratik tecrübesi olan, sistem programlama temellerine alışkın 1.Sınıf Bilgisayar Mühendisliği öğrencisi. Veri tabanı yönetimi, sistem mimarisi, ve oturum yönetimi hakkında meraklı ve kendini geliştiren. 300 binden fazla kullanıcıya kişesel projeleri ile hizmet sunan.  </p></article>
      </section>
      <hr>
      <section class="text-center py-2">
        
        <h2 class="text-2xl py-2">Eğitim</h2>
        <article class="text-center"><p>Bilgisayar Mühendisliği, Sakarya Üniversitesi (2025-2029)</p></article>
      </section>
      <hr> 
      <section class="text-center py-2">
        <h2 class="text-2xl py-2">Tecrübeler</h2>
        <ul class="list-disc text-justify space-y-1">
          <li>
            <article>
            <span class="font-bold"> ScorialCMS (Content Management System):</span><p>Belirlenen bir dizindeki Markdown dosyalarının otomatik olarak web sayfalarına dönüştürülerek kullanıcalara servis eden statik içerik yönetim sistemi.
              Dizindeki değişikleri dosya sistemi olayları ile takip edip web sayfalarıyla senkron etme, ACME doğrulaması ile otomatikmen TLS sertifikalarının edinilmesi, Brotli ile sayfaların sıkıştırılması, Middleware ile istek sınırlama, Otomatik Atom feed üretimi, Web sayfalarında ETag ile gereksiz işlemlerden kaçınma gibi özellikler barındırmaktadır.
              Ortalama TTFB, Wordpress'e kıyasla %75 daha azdır. Gelişim süreci devam ettikçe özellikler ve performans artmaktadır. 
            </p></article>
          </li>
          <li>
            <article>
            <span class="font-bold">Sosyal medya içerik indirme sitesi:</span>
            <p>Bir sosyal medya platformunda paylaşılan içeriklerin indirilmesine olanak sunan web sitesi. Sosyal medya platformunun API'sından indirilen ses ve görüntü akışları FFmpeg ile birleştirilip Python+Flask altyapılı siteden kullanıcılara servis edilmiştir.
               Erişim kolaylığı sağlamak amacıyla sosyal medyada içeriğin yorumlarında çağrılabilen, çağrıldığında o içeriği indirmek üzere link sağlayan bir sosyal medya botuda geliştirilmiştir.
               Web sitesi Google Analytics verilerine göre toplamda 210 binden fazla eşsiz kullanıcıya hizmet sağlamıştır. 
            </p></article>
          </li>
        </ul>
      </section>
      <hr>
      <section class="text-center py-2">
        <h2 class="text-2xl py-2">Yetenekler</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>Go</li>
          <li>Python</li>
          <li>Flask</li>
          <li>SQLite</li>
          <li>Linux</li>
        </ul> 
      </section>
      <hr>
      <section class="text-center py-2">
        <h2 class="text-2xl py-2">İletişim yolları</h2>
        <p> <a href="tel:+905616175397"> +90 561 617 5397</a> veya <a href="mailto:ahmetaslan139@outlook.com.tr">ahmetaslan139@outlook.com.tr</a> üzerinden ulaşabilirsiniz.</p>
      </section>
      <hr>
      <sub>Bilgilerin gerçek olmasına rağmen ciddi amaçlı yazılan bir CV değildir. Daha küçük ölçekli projeler yazılmamıştır.</sub>
    </div>
    

  
  <?php include "includes/footer.php";?>
  </body>
</html>
