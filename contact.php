<!DOCTYPE html>
<html>
  <head>
    <title>İletişim</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="importmap">
    {
    "imports": {
      "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
    }
    }
  </script>
    <script>
      function kontrol(){
      let email=document.forms["form"]["email"].value;
      let tel=document.forms["form"]["tel"].value;
      let onay= document.forms["form"]["onay"].checked;
      const nokta=email.split(".").length-1;
      const etIsaret=email.split("@").length-1;
      if (!onay){
        window.alert("Onay verilmedi!");
      }
      else if (nokta<1){
        window.alert("Email'de . yok !");
      }
      else if (etIsaret!==1){
        window.alert("Email'de bir tane @ olmalı!");
      }
      else if (/\p{L}/u.test(tel)){
        window.alert("Telefon numarasında harf var!");
      }}
    </script>
  </head>
  <body class="bg-neutral-800 text-white">
  <?php include "includes/header.php";?>
    <div class="container mx-auto">
      <h1 class="text-3xl text-center py-2">İletişim Formu</h1>
      <div id="app" class="max-w-xs mx-auto py-2">
        <form method="POST" class="flex flex-col justify-self-center items-center space-y-2" name="form" action="contact_process.php" >
          <select required name="tur">
            <option value="sikayet">Şikayet</option>
            <option value="oneri">Öneri</option>
            <option value="Diğer">Diğer</option>
          </select>
          <input v-model="email" id="email" name="email" type="email" placeholder="E-mail" class="border-2 border-gray-200 rounded-xl p-1" required>
          <input v-model="tel" id="tel" name="tel" type="tel" placeholder="Telefon numaranız" class="border-2 border-gray-200 rounded-xl p-1" required>
          <textarea required id="mesaj" name="mesaj" placeholder="Mesajınızı giriniz" class="border-2 border-gray-200 rounded-xl p-1" ></textarea>
          <label for="onay">KVKK onayı</label>
          <input v-model="onay" required name="onay" id="onay" aria-label="KVKK onayı" type="checkbox">
          <div class="grid grid-rows-1 grid-cols-2">
          <button type="button" onclick="kontrol()" class="p-1 border-2 border-gray-200 rounded-xl my-2 w-max justify-self-center" >Kontrol et (JS)</button>
          <button type="button" @click="kontrolVue" class="p-1 border-2 border-gray-200 rounded-xl my-2 w-max justify-self-center" >Kontrol et (Vue)</button>
          </div>
          <input type="submit" value="Gönder" onclick="" class="p-1 border-2 border-gray-200 rounded-xl w-max justify-self-center" >
        </form>
      </div>
    
  </div>  
  <?php include "includes/footer.php";?>
  <script type="module">
    import {createApp, ref} from 'vue'

    createApp({
      setup(){
        const email=ref('')
        const tel=ref('')
        const onay=ref(false)

        const kontrolVue=()=>{
        const nokta=email.value.split(".").length-1;
        const etIsaret=email.value.split("@").length-1;

          if (!onay.value) {
            window.alert("Onay verilmedi!");
          } else if (nokta < 1) {
            window.alert("Email'de . yok !");
          } else if (etIsaret!==1){
            window.alert("Email'de bir tane @ olmalı!");
          } else if (/\p{L}/u.test(tel.value)) {
            window.alert("Telefon numarasında harf var!");
          }  
        }
        return{
          email,
          tel,
          onay,
          kontrolVue
        }
      }
    }).mount('#app')
  </script>
  </body>
</html>
```


