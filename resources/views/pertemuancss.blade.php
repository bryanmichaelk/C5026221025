<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSS</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: blueviolet;
      }
      p,
      div {
        text-align: center;
      }
      .salam {
        font-size: 2rem;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
      }
      .garisbawah {
        text-decoration: underline;
        color: black;
      }
    </style>
  </head>
  <body>
    <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halmana yang berbeda -->
    Hallo
    <b style="color: red; text-shadow: 1px 1px 5px black" class="garisbawah"
      >Apa</b
    >
    Kabar?
    <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
    <div class="garisbawah salam">Hallo Apa Kabar?</div>
    <!-- External File, digunakna untuk global 1 unite -->
    <span class="sembuyi">Hallo Apa Kabar?</span>
    <p>Hallo Apa Kabar?</p>
    <a href="https://www.w3schools.com/">W3Schools</a>
    <img src="img/tentangKami.jpg" alt="" class="profpicture" />
    <div class="kotakfoto">
      <img src="img/tentangKami.jpg" alt="" class="fotobiasa" />
    </div>
  </body>
</html>
