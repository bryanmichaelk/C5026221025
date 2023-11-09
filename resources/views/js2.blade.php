<!DOCTYPE html>
<html>
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
      function validateForm() {
        //let x = document.forms["myForm"]["fname"].value;
        var x = document.getElementById("fname");
        var nrp = document.getElementById("nrp");
        //bahwa yang dicek yang invalid
        //lakukan per jenis validasi, supaya user tahu salahnya apa
        if (x.value == "") {
          alert("Nama harus diisi");
          x.focus();
          return false;
          //stop, ga dikirim ke server
        }
        if (nrp.value == "") {
          alert("NRP harus diisi");
          nrp.focus();
          return false;
          //stop, ga dikirim ke server
        }

        if (isNaN(nrp.value) == true) {
          alert("NRP harus jum angka");
          nrp.focus();
          nrp.value = "";
          return false;
        }

        if (nrp.value.length != 10) {
          alert(
            "Jumlah digit harus 10, Anda memasukkan " +
              nrp.value.length +
              " digit"
          );
          nrp.focus();
          return false;
        }

        if (nrp.value.substring(0, 4) != "5026") {
          alert("Hanya untuk Mahasiswa Sistem Informasi");
          return false;
        }

        if (
          nrp.value.substring(4, 6) != "21" &&
          nrp.value.substring(4, 6) != "22"
        ) {
          alert("Hanya untuk angkatan 2022 & 2021");
          nrp.focus();
          return false;
        }
        return true; //boleh dikasih boleh tidak, karena default function adalah true
        //ke false berfungsi supaya tidak jadi dikirimkan
      }
    </script>
  </head>
  <body>
    <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>
    <form
      name="myForm"
      action="https://www.w3schools.com/jsref/jsref_isinteger.asp"
      onsubmit="return validateForm()"
      method="post">
      <label for="email">Name:</label>
      <input type="text" name="fname" class="form-control" id="fname" />
      <label for="nrp">NRP:</label>
      <input type="text" name="nrp" class="form-control" id="nrp" />

      <input type="submit" value="Submit" class="btn btn-primary" />
      <input type="reset" value="Kosongi" class="btn btn-warning" />
    </form>
  </body>
</html>
