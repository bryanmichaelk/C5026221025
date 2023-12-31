<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coba JS</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function showalert() {
        alert("Selamat ! Anda mendapatkan 100 juta !");
      }
      function changeText() {
        var span = document.getElementById("output"); //membaca tulisan di span yang lama
        var textBox = document.getElementById("textBox"); //membaca tulisan yang baru
        textBox.style.color = "red"; //mengubah warna font dari textbox
        span.innerHTML = textBox.value;
        //innerHTML = mengubah text secara runtime
        //.value = membaca isi komponen form
        console.log("Hore sudah di sini");
        console.log("Isinya text box adalah " + textBox.value);
      }
    </script>
    <link rel="" href="" />
  </head>
  <body>
    <div class="container">
      <center>
        <button class="btn btn-primary" onclick="showalert()">
          Klik Di Sini
        </button>
      </center>
      <br />
      <button onclick="changeText();" class="btn btn-success">Click me!</button>
      <span id="output">replace me</span>
      <input id="textBox" type="text" class="form-control" /><br />
      <div class="form-group">
        <label for="bil1">Bilangan 1</label>
        <input
          type="number"
          id="bil1"
          placeholder="Masukkan Bilangan pertama"
          class="form-control" />
      </div>
      <div class="form-group">
        <label for="bil2">Bilangan 2</label>
        <input
          type="number"
          id="bil2"
          placeholder="Masukkan Bilangan Kedua"
          class="form-control" />
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary" onclick="tambah()">
          Tambah
        </button>
        <button type="button" class="btn btn-primary" onclick="kali()">
          Perkalian
        </button>
      </div>
      <h3>
        Hasil Operasi :
        <div id="hasil"></div>
      </h3>
    </div>
    <script src="{{asset('js/operasi.js')}}"></script>
  </body>
</html>
